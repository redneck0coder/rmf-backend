<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RMF</title>
	@vite('resources/css/app.css')
</head>
<body>
	<div class="bg-gradient-to-bl from-emerald-400 from-0% to-cyan-400 to-100%">
		<x-ui.header :topics="$topics"></x-ui.header>
		{{ $slot }}
	</div>
</body>
</html>