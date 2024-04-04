<x-layout.admin :topics="$topics">
	<section class="py-4 px-2 w-full main-container">
		<div class="p-4 rounded-xl bg-white w-full h-full max-h-full overflow-auto">
			<x-form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data" >
			<h2 class="text-2xl">Редактирование статьи</h2>
				@method('PUT')
				@bind($article)
					@include('admin.article.form')
				@endbind
				<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Обновить</button>
			</x-form>
			</div>
	</section>
	@vite('resources/js/quill')
</x-layout.public>