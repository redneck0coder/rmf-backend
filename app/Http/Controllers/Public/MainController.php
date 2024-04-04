<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
			$topics = Topic::all();
			return view('public.main', compact('topics'));
		}

		public function topic(Request $request) {
			$topicAlias = $request->route('topic_alias');

			$topics = Topic::all();
			$topic = Topic::where('alias', $topicAlias)->first();
			$articles = $topic->articles;
			return view('public.topic', compact('topics', 'topic', 'articles'));
		}

		public function article(Request $request) {
			$topicAlias = $request->route('topic_alias');
			
			$topics = Topic::all();
			$topic = Topic::where('alias', $topicAlias)->first();
			
			$articles = Article::where('topic_id', $topic->id)->get();
			$article = Article::with('image')->where('alias', $request->route('article_alias'))->get();
			return view('public.article', compact('topic', 'topics','article', 'articles'));
		}
}
