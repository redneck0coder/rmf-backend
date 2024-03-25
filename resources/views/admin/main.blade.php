<x-layout.admin :topics="$topics">
	<section class="p-4">
		<div class="flex flex-col">
			<a href="{{ route('topics.index') }}">
				<div class="w-full border rounded p-4 my-4">	
						Управление разделами
				</div>
			</a>

			<a href="{{ route('articles.index') }}">
				<div class="w-full border rounded p-4 my-4">	
						Управление статьями
				</div>
			</a>
		</div>
	</section>
</x-layout.public>