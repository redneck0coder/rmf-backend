<header class="h-24 p-8 border-b flex justify-between items-center">
	<div class="flex items-center"> 
		<div class="text-2xl mx-8">
			<a href="{{route('main')}}">RoadMapFrontend 2024</a>	
		</div>
		<nav>
			<ul class="flex">
				@auth
				<li class="mx-4">
						<a href="{{ route('admin.main') }}">admin</a>
				</li>
				@endif
					@foreach($topics as $topic)
					<li class="mx-4">
						<a href="{{ route('topic.main', $topic->alias) }}">{{ $topic->name }}</a>
					</li>
					@endforeach
			</ul>
		</nav>
	</div>
	<div>
		@auth
		<x-form :action="route('login.logout')">
			<button class="text-rose-400" type="submit">Выход</button>
		</x-form>
		@endif
	</div>

</header>