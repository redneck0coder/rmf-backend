
<nav class="navbar w-48 border-r">
		<ul class="flex flex-col">
			@auth
				<li class="border-b py-4 text-center">
					<a class="text-blue-700" href="{{ route('articles.create') }}"> + Добавить статью</a>
				</li>			
			@endif
			@foreach($articles as $article)
				<li class="border-b py-4 text-center">
					<a class="text-gray-700" href="{{ route('article.main', [$topic->alias, $article->alias]) }}"> {{ $article->title }}</a>
				</li>	
			@endforeach
		</ul>
</nav>