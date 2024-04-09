@extends('admin.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href=" {{asset('css/form.css')}}">
@endsection

@section('content')
<form action="/books" method="POST">
	@csrf
	<header>Create Book</header>
	<div class="separator"></div>
	<div>
		<label for="author">Author:</label>
		<input type="text" name="author" id="author">
	</div>
	@error('author')
		<div class="error">
			{{$message}}
		</div>
	@enderror
	<div>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title">
	</div>
	@error('title')
	<div class="error">
		{{$message}}
	</div>
	@enderror
	<div>
		<label for="content">content:</label>
		<textarea name="content" id="content"></textarea>
	</div>
	@error('content')
	<div class="error">
		{{$message}}
	</div>
	@enderror
	<div>
		<input type="submit" value="create">
	</div>
</form>
@endsection