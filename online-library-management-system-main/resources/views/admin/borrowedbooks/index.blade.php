@extends('admin.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{ asset('css/resources-listing.css') }}">
@endsection

@section('content')
<section class="top">
	<form action="/students" method="GET">
		<input type="text" name="id" placeholder="Search students...">
		<input type="submit" value="search">
	</form>
</section>
<section class="books">
	<header>
		<span>Borrowed Books</span>
	</header>
	<table>
		<tr colspan="5">
			<td colspan="5">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Author</th>
			<th>Title</th>
			<th>Borrower ID</th>
		</tr>
		<tr colspan="5">
			<td colspan="5">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td> {{$book['author']}}</td>
				<td> {{$book['title']}} </td>
				<td> {{$book['user_id']}} </td>
			</tr>
		@endforeach
	</table>
</section>

@endsection