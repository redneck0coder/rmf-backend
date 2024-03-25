<x-layout.admin :topics="$topics">
	<section class="flex justify-center items-center">
		<x-form action="{{ route('articles.update', $article->id) }}" method="post">
			@method('PUT')
			@bind($article)
				@include('admin.article.form')
			@endbind
			<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Обновить</button>
		</x-form>
	</section>
</x-layout.public>