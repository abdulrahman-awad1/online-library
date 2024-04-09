<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('css-specific')
</head>
<body>
	<nav>
		<div>
			<div class="logo"><img src="{{ asset('imgs/logo3.png') }}" alt="logo"> <span>Online Library</span></div>
			<div class="separator"></div>
			<div class="navigation-links">
				<a href="/dashboard">Dashboard</a>
				<a href="/bookslibrary">Books Library</a>
				<a href="/mybooks">My Books</a>
			</div>
		</div>
		<div class="user-info">
		@if (auth()->check())
			<i class='bx bxs-user-circle profile' ><a href="/profile"><span>view profile</span></a></i>
			{{ auth()->user()->name }}
			<br>
			<span class="email">{{ auth()->user()->email }}</span>
		@endif
		</div>
	</nav>
	<section class="main-container">
		<div class="rest">
			@yield('content')
		</div>
	</section>
</body>
</html>