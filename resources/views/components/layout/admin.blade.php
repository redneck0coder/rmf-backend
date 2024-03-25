<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RMF</title>
	@vite('resources/css/app.css')
</head>
<body>
	<x-ui.header :topics="$topics"></x-ui.header>
	{{ $slot }}
</body>
</html>