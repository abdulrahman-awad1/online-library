@extends('user.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{ asset('css/resources-listing.css') }}">
@endsection

@section('content')
<section class="top">
	<form action="{{ route('search')}}" method="GET">
        @csrf
		<input type="text" name="query" placeholder="Search books...">
		<input type="submit" value="search">
	</form>
</section>
<section class="books">
	<header>
		<span>Books Library</span>
	</header>
	<table>
		<tr colspan="3">
			<td colspan="3">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Author</th>
			<th>Title</th>
		</tr>
		<tr colspan="3">
			<td colspan="3">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td>{{$book['author']}}</td>
				<td>{{$book['title']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/bookslibrary" class="show">...show all</a>
</section>
<section class="borrowedbooks">
	<header>
		<span>Borrowed Books</span>
	</header>
	<table>
		<tr colspan="3">
			<td colspan="3">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Author</th>
			<th>Title</th>
		</tr>
		<tr colspan="3">
			<td colspan="3">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($borrowedbooks as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td>{{$book['author']}}</td>
				<td>{{$book['title']}}</td>
			</tr>
		@endforeach
	</table>
	<a href="/mybooks" class="show">...show all</a>
</section>

@endsection
