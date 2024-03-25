<x-layout.admin :topics="$topics">
	<section class="flex justify-center items-center">
		<x-form :action="route('articles.store')">
			@include('admin.article.form')
			<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Создать</button>
		</x-form>
	</section>
</x-layout.public>