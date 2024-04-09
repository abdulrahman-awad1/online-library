@extends('admin.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{asset('css/form.css')}}">
@endsection

@section('content')
<form action="/books/{{$book['id']}}" method="POST">
	@csrf
	@method('put')
	<header>Update Book</header>
	<div class="separator"></div>
	<div>
		<label for="author">Author:</label>
		<input type="text" name="author" id="author" value="{{$book['author']}}">
	</div>
	@error('author')
		<div class="error">
			{{$message}}
		</div>
	@enderror
	<div>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" value="{{$book['title']}}">
	</div>
	@error('title')
	<div class="error">
		{{$message}}
	</div>
	@enderror
	<div>
		<label for="content">content:</label>
		<textarea name="content" id="content">{{$book['content']}}</textarea>
	</div>
	@error('content')
	<div class="error">
		{{$message}}
	</div>
	@enderror
	<div>
		<input type="submit" value="update">
	</div>
</form>
@endsection