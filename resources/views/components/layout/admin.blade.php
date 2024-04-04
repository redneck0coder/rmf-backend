<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RMF</title>
	<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.4/dist/quill.snow.css" rel="stylesheet">
	@vite('resources/css/app.css')
</head>
<body>
	<div class="bg-gradient-to-bl from-emerald-400 from-0% to-cyan-400 to-100%">
		<x-ui.header :topics="$topics"></x-ui.header>
		<div class="flex">
			<nav class="navbar py-4 px-2">
				<div class="w-64 h-full bg-white rounded-xl">
						<ul class="flex flex-col">
								<li class="border-b py-4 text-center">
									<a href="{{ route('admin.main') }}">Управление</a>
								</li>			
								<li class="border-b py-4 text-center">
									<a href="{{ route('topics.index') }}">Управление разделами</a>
								</li>			
								<li class="border-b py-4 text-center">
									<a href="{{ route('articles.index') }}">Управление статьями</a>
								</li>
						</ul>
				</div>
			</nav>
			{{ $slot }}
		</div>

	</div>
</body>
</html>