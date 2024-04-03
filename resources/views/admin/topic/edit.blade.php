<x-layout.admin :topics="$topics">
	<section class="flex flex-col justify-center items-center">
		<h2 class="text-4xl text-white">Редактирование темы</h2>
		<x-form :action="route('topics.update', $topic->id)" method="put" enctype="multipart/form-data" >
				@bind($topic)
					@include('admin.topic.form')
				@endbind
				<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Редактировать</button>
		</x-form>
	</section>
	@vite('resources/js/quill')
</x-layout.public>