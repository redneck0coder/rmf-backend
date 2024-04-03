<x-layout.public :topics="$topics">
	<div class="flex bg-white">
			<x-ui.navbar :topic="$topic" :articles="$articles"></x-ui.navbar>
			<article class="p-4 w-full">
				<div class="my-6 flex justify-center items-center">
					<img width="50" src="/images/{{$topic->image->url}}" alt="logo">
				</div>
				Topic: {!! $topic->desc !!}
			</article>
	</div>
</x-layout.public>