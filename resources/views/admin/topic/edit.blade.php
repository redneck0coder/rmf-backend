<x-layout.admin :topics="$topics">
	<section class="py-4 px-2 w-full main-container">
		<div class="p-4 rounded-xl bg-white w-full h-full max-h-full overflow-auto">
			<h2 class="text-2xl">Редактирование темы</h2>
			<x-form :action="route('topics.update', $topic->id)" method="put" enctype="multipart/form-data" >
					@bind($topic)
						@include('admin.topic.form')
					@endbind
					<button class="bg-blue-400 mt-2 py-2 px-4 text-white rounded" type="submit">Редактировать</button>
			</x-form>
		</div>
	</section>
	@vite('resources/js/quill')
</x-layout.public>