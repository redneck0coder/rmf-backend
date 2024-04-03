<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Article\Store;
use App\Http\Requests\Article\Update;
use App\Models\Article;
use App\Models\Topic;
use App\Models\Image;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
			$topics = Topic::all();
			$articles = Article::all();
      return view('admin.article.index', compact('articles', 'topics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
			$topicsList = Topic::all()->pluck('name', 'id');
			$topics = Topic::all();
			return view('admin.article.create', compact('topicsList', 'topics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
				$data = $request->validated();
				$article = Article::make($data);

				$article->save();

				if($request->hasFile('url')) {
					$imageName = time().'.'.$request->url->getClientOriginalExtension();
					$request->url->move(public_path('images'), $imageName); 
					
					$image = new Image;
					$image->url = $imageName;
					$image->imagetable_id = $article->id;
					
					$article->image()->save($image);
				}

				return redirect()->route('articles.index');
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
				$topicsList = Topic::all()->pluck('name', 'id');
				$topics = Topic::all();
				$article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article', 'topics', 'topicsList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, string $id)
    {		
				$article = Article::findOrFail($id);
				$article->update($request->validated());

				return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
				$article = Article::findOrfail($id);
				$article->delete();

				return redirect()->route('articles.index');
    }
}
