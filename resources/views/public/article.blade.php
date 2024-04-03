<x-layout.public :topics="$topics">
	<div class="flex">
		<x-ui.navbar :topic="$topic" :articles="$articles"></x-ui.navbar>
		<section class="p-4 bg-white w-full">
			Article: {!! $article->body !!}
		</section>
	</div>
</x-layout.public>