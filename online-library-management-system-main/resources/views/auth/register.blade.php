@extends('guest')
@section('css-specific')
<link rel="stylesheet" href="{{ asset("css/login-signup.css")}}">
@endsection
@section('content')

<section class="form-container">
	<form action="/signup" method="post">
		@csrf
		<header>Registration</header>
		<div class="separator"></div>
		<section>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name">
		</section>
		@error('name')
			<section class="error">
				{{$message}}
			</section>
		@enderror
		<section>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email">
		</section>
		@error('email')
			<section class="error">
				{{$message}}
			</section>
		@enderror
		<section>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
		</section>
		@error('password')
			<section class="error">
				{{$message}}
			</section>
		@enderror
		<section class="radio-container">
			<div>
				<input type="radio" name="role" id="Admin" value="Admin">
				<label for="Admin">Admin</label>
			</div>
			<div>
				<input type="radio" name="role" id="Student" value="Student">
				<label for="Student">Student</label>
			</div>
		</section>
		@error('role')
			<section class="error">
				{{$message}}
			</section>
		@enderror
		<div>
			Already have an account? <a href="/login">Log in</a>
		</div>
		<section>
			<input type="submit">
		</section>
	</form>
</section>

@endsection