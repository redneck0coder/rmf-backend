<x-layout.public :topics="$topics">
<section class="main-container flex text-white">
	<div class="h-full w-1/2 flex flex-col justify-center items-center ">
		<h1 class="text-4xl">
			Road Map Frontend
		</h1>
		<div class="text-xl">
			настольная книга Frontend разработчика
		</div>
	</div>
	<div class="h-full w-1/2 p-8">
		<div class="w-full h-full border rounded-xl p-8 flex flex-col justify-center items-center">
			<h2 class="text-4xl mb-4">Темы</h2>
			<div class="flex flex-wrap justify-center items-center">
					@foreach($topics as $topic)
						<a href="{{ route('topic.main', $topic->alias) }}">
							<div class="w-36 h-36 rounded-xl p-4 flex flex-col justify-center items-center m-4">
								<img class="my-4" width="50" src="/images/{{$topic->image->url}}" alt="logo">
								{{ $topic->name }}
							</div>
						</a>
					@endforeach
			</div>
		</div>
	</div>
</section>
<!-- <section class="p-48">
	<h2 class="text-4xl">Разделы:</h2>
	<div class="flex justify-center items-center py-4">
		@auth
			<a href="{{ route('topics.create') }}">
				<div class="w-36 h-36 border rounded-xl p-4 m-4 flex justify-center items-center">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
					</svg>
				</div>
			</a>
		@endif

		@foreach($topics as $topic)
			<a href="{{ route('topic.main', $topic->alias) }}">
				<div class="w-36 h-36 border rounded-xl p-4 flex flex-col justify-center items-center m-4">
					<img class="my-4" width="50" src="/images/{{$topic->image->url}}" alt="logo">
					{{ $topic->name }}
				</div>
			</a>
		@endforeach
	
	</div> -->
</section>
</x-layout.public>