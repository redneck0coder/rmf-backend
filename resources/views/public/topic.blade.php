<x-layout.public :topics="$topics">
	<section class="flex main-container">
			<x-ui.navbar :topic="$topic" :articles="$articles"></x-ui.navbar>
			<div class="my-4 w-full">
				<article class="mr-2 p-4 bg-white rounded-xl h-full max-h-full overflow-auto">
					<div class="my-6 flex justify-center items-center">
						<img width="50" src="/images/{{$topic->image->url}}" alt="logo">
					</div>
					Topic: {!! $topic->desc !!}
				</article>
			</div>
	</div>
</x-layout.public>