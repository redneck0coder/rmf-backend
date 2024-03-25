<x-layout.public :topics="$topics">
	<div class="flex">
			<x-ui.navbar :topic="$topic" :articles="$articles"></x-ui.navbar>
			<article class="p-4">
				Topic: {{$topic->desc}}
			</article>
	</div>
</x-layout.public>