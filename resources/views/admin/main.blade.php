<x-layout.admin :topics="$topics">
	<section class="p-4 main-container text-white bg-white">
		<div class="flex justify-center text-black">
				<div class="border rounded m-4 flex items-center p-12">	
					<a href="{{ route('topics.index') }}">
						Управление разделами
					</a>
				</div>

				<div class="border rounded m-4 flex items-center p-12">	
					<a href="{{ route('articles.index') }}">
							Управление статьями
					</a>
				</div>
		</div>
	</section>
</x-layout.public>