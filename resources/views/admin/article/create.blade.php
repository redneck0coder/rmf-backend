<x-layout.admin :topics="$topics">
	<section class="py-4 px-2 w-full main-container">
		<div class="p-4 rounded-xl bg-white w-full h-full max-h-full overflow-auto">
			<x-form :action="route('articles.store')" enctype="multipart/form-data" >
			<h2 class="text-2xl">Создание статьи</h2>
				@include('admin.article.form')
				<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Создать</button>
			</x-form>
		</div>
	</section>
@vite('resources/js/quill')
</x-layout.public>