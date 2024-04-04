<x-layout.public :topics="$topics">
	<section class="flex main-container">
		<x-ui.navbar :topic="$topic" :articles="$articles"></x-ui.navbar>
		<div class="p-4 w-full">
			<article class="p-4 bg-white rounded-xl max-h-full overflow-auto">
				@if($article->image)
					<div>
						<img src="/images/{{$article->image->url}}" alt="">
					</div>
				@endif
					Article: {!! $article->body !!}
			</article>
		</div>

	</div>
</x-layout.public>