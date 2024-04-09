<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{ asset('css/guest.css') }}">
	@yield('css-specific')
</head>
<body>
	<nav>
		<a href="/"><img src="{{ asset('imgs/logo3.png') }}" alt=""></a>
		<div>
			<a href="/login">Log in</a>
			<a href="/signup">Sign up</a>
		</div>
	</nav>
	@yield('content')
</body>
</html>