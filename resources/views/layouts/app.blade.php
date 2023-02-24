<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Laravel Dc Comics</title>
		<link rel="shortcut icon" href="{{Vite::asset('resources/img/dc-logo.png')}}" type="image/x-icon">

		@vite('resources/js/app.js')
	</head>
	<body>
		@include('partials.header')
		@include('partials.jumbotron')
		@yield('content')
		@include('partials.footer')
	</body>
</html>