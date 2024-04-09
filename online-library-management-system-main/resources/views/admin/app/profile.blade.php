<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
	<nav>
		<div>
			<div class="logo"><img src="{{ asset('imgs/logo3.png') }}" alt="logo"> <span>Online Library</span></div>
			<div class="separator"></div>
			<div class="navigation-links">
				<a href="/dashboard">Dashboard</a>
				<a href="/books">Books</a>
				<a href="/borrowedbooks">Borrowed Books</a>
				<a href="/students">Students</a>
			</div>
		</div>
	</nav>
	<section class="main-container">
		<div class="card">
			<header>
				<i class='bx bxs-user-circle'></i>
				<div>
					<span>Profile</span><br>
					<span>Update your personal details.</span>
				</div>
				<a href="/logout">Log out</a>
			</header>
			<form action="/profile" method="POST">
				@csrf
				@method('put')
				<div>
					<input id="id" type="text" name="id" value="@if (auth()->check()) {{auth()->user()->id}} @endif" hidden>
				</div>
				<div>
					<label for="name">Name:</label>
					<input id="name" type="text" name="name" value="@if (auth()->check()) {{auth()->user()->name}} @endif">
				</div>
				@error('name')
					<div class="error">
						{{$message}}
					</div>
				@enderror
				<div>
					<label for="email">Email:</label>
					<input id="email" type="text" name="email" value="@if (auth()->check()) {{auth()->user()->email}} @endif">
				</div>
				@error('email')
				<div class="error">
					{{$message}}
				</div>
				@enderror
				<div>
					<label for="password">New password:</label>
					<input id="password" type="password" name="password">
				</div>
				@error('password')
				<div class="error">
					{{$message}}
				</div>
				@enderror
				<div>
					<br><br>
					<input type="submit" value="update">
				</div>
			</form>
		</div>
	</section>
</body>
</html>