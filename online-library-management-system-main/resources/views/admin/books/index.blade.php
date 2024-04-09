@extends('admin.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{ asset('css/resources-listing.css') }}">
@endsection

@section('content')

<section class="books">
	<header>
		<span>Books</span>
		<a href="/books/create" title="Add book">Create Book</a>
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
			<th>Created at</th>
			<th>Actions</th>
		</tr>
		<tr colspan="5">
			<td colspan="5">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td> {{$book['author']}} </td>
				<td> {{$book['title']}} </td>
				<td> {{$book['created_at']}} </td>
				<td>
					<div class="operations-container">
						<a href="/books/{{$book['id']}}">view</a>
						<a href="/books/{{$book['id']}}/edit">update</a>
						<form action="/books/{{ $book['id'] }}" method="post">
							@csrf
							@method('delete')
							<input type="submit" value="delete">
						</form>
					</div>
				</td>
			</tr>
		@endforeach
	</table>
</section>

@endsection