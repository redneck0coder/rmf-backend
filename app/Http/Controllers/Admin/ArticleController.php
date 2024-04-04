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

    public function index()
    {
			$topics = Topic::all();
			$articles = Article::all();
      return view('admin.article.index', compact('articles', 'topics'));
    }

    public function create()
    {
			$topicsList = Topic::all()->pluck('name', 'id');
			$topics = Topic::all();
			return view('admin.article.create', compact('topicsList', 'topics'));
    }

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

    public function show(string $id)
    {
        //
    }

    public function edit(Article $article)
    {
				$topicsList = Topic::all()->pluck('name', 'id');
				$topics = Topic::all();
        return view('admin.article.edit', compact('article', 'topics', 'topicsList'));
    }

    public function update(Update $request, Article $article)
    {		
				$article->update($request->validated());
				
				if($request->hasFile('url')) {
					$imageName = time().'.'.$request->url->getClientOriginalExtension();
					$request->url->move(public_path('images'), $imageName); 
					
					if($article->image) {
						$image = Image::find($article->image->id);
						$image->url = $imageName;
						$image->update(['url'=>$imageName]);
					} else {
						$image = new Image;
						$image->url = $imageName;
						$article->image()->save($image);
					}
				}

				return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
				$article->delete();
				return redirect()->route('articles.index');
    }
}
