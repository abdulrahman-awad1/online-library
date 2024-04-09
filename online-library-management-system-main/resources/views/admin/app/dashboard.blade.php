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
		<span>Books</span>
	</header>
	<table>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Author</th>
			<th>Title</th>
			<th>Created at</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td>{{$book['author']}}</td>
				<td>{{$book['title']}}</td>
				<td>{{$book['created_at']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/books" class="show">...show all</a>
</section>
<section class="borrowedbooks">
	<header>
		<span>Borrowed Books</span>
	</header>
	<table>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Author</th>
			<th>Title</th>
			<th>Borrower ID</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($borrowedbooks as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td>{{$book['author']}}</td>
				<td>{{$book['title']}}</td>
				<td>{{$book['user_id']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/borrowedbooks" class="show">...show all</a>
</section>
<section class="students">
	<header>
		<span>Students</span>
	</header>
	<table>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Joined at</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($students as $student)
			<tr>
				<td>{{$student['id']}}</td>
				<td>{{$student['name']}}</td>
				<td>{{$student['email']}}</td>
				<td>{{$student['created_at']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/students" class="show">...show all</a>
</section>

@endsection