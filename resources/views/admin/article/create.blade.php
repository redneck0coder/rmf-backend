<x-layout.admin :topics="$topics">
	<section class="flex justify-center items-start main-container">
		<x-form class="w-full py-12 px-14" :action="route('articles.store')">
		<h2 class="text-2xl text-white">Создание статьи</h2>
			@include('admin.article.form')
			<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Создать</button>
		</x-form>
	</section>
@vite('resources/js/quill')
</x-layout.public>