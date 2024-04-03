<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Topic\Store;
use App\Http\Requests\Topic\Update;
use App\Models\Topic;
use App\Models\Image;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
				$topics = Topic::with('image')->get();
        return view('admin.topic.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

			$topics = Topic::all();
			return view('admin.topic.create', compact('topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

					$topic->image()->save($image);
			}

			return redirect()->route('topics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
			$topics = Topic::all();
			$topic = Topic::findOrFail($id);
        return view('admin.topic.edit', compact('topic', 'topics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, string $id)
    {
			$topic = Topic::findOrFail($id);

			$topic->update($request->validated());

			return redirect()->route('topics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topic = Topic::findOrFail($id);
				$topic->delete();
			
				return redirect()->route('topics.index');
    }
}
