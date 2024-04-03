<x-layout.public :topics="$topics">
	<div class="flex">
		<x-ui.navbar :topic="$topic" :articles="$articles"></x-ui.navbar>
		<section class="p-4 bg-white w-full">
		@if($article->image)
			<div>
				<img src="/images/{{$article->image->url}}" alt="">
			</div>
		@endif
			Article: {!! $article->body !!}
		</section>
	</div>
</x-layout.public>