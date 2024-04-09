@extends('guest')
@section('css-specific')
<link rel="stylesheet" href="{{ asset("css/login-signup.css")}}">
@endsection
@section('content')

<section class="form-container">
	<form action="/login" method="post" class="mini">
		@csrf
		<header>Login</header>
		<div class="separator"></div>
		<section>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email">
		</section>
		<section>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
		</section>
		@if ($errors->any())
			<section class="error">
					@foreach ($errors->all() as $error)
						{{$error}}
					@endforeach
			</section>
		@endif
		<div>
			Don't have an account? <a href="/signup">Sign up</a>
		</div>
		<section>
			<input type="submit" value="login">
		</section>
	</form>
</section>

@endsection