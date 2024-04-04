<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Topic\Store;
use App\Http\Requests\Topic\Update;
use App\Models\Topic;
use App\Models\Image;

class TopicController extends Controller
{

    public function index()
    {
				$topics = Topic::with('image')->get();
        return view('admin.topic.index', compact('topics'));
    }

    public function create()
    {

			$topics = Topic::all();
			return view('admin.topic.create', compact('topics'));
    }

    public function store(Store $request)
    {

			$topic = Topic::make($request->validated());
			$topic->save();
			
			if($request->hasFile('url')) {
					$imageName = time().'.'.$request->url->getClientOriginalExtension();
					$request->url->move(public_path('images'), $imageName); 
					
					$image = new Image;
					$image->url = $imageName;
					$image->imagetable_id = $topic->id;

			}

			$topic->image()->save($image);

			return redirect()->route('topics.index');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(Topic $topic)
    {
			$topics = Topic::all();
      return view('admin.topic.edit', compact('topic', 'topics'));
    }

    public function update(Update $request, Topic $topic)
    {
			$topic->update($request->validated());

			if($request->hasFile('url')) {
				$imageName = time().'.'.$request->url->getClientOriginalExtension();
				$request->url->move(public_path('images'), $imageName); 
				
				if($topic->image) {
					$image = Image::find($topic->image->id);
					$image->url = $imageName;
					$image->update(['url'=>$imageName]);
				} else {
					$image = new Image;
					$image->url = $imageName;
					$topic->image()->save($image);
				}
			}

			return redirect()->route('topics.index');
    }

    public function destroy(Topic $topic)
    {
				$topic->delete();			
				return redirect()->route('topics.index');
    }
}
