<x-layout.admin :topics="$topics">
	<section class="flex justify-center items-start main-container">
		<x-form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data" >
		<h2 class="text-2xl text-white">Редактирование статьи</h2>
			@method('PUT')
			@bind($article)
				@include('admin.article.form')
			@endbind
			<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Обновить</button>
		</x-form>
	</section>
	@vite('resources/js/quill')
</x-layout.public>