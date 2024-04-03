<header class="h-24 p-8 text-white ">
	<div class="flex justify-between items-center "> 
		<div class="text-2xl mx-8">
			<a href="{{route('main')}}">RoadMapFrontend</a>	
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
					@auth
					<li class="ml-4">
						<x-form :action="route('login.logout')">
								<button class="text-rose-500" type="submit">Выход</button>
						</x-form>
					</li>
					@endif
			</ul>
		</nav>
	</div>
	<div>
	</div>

</header>