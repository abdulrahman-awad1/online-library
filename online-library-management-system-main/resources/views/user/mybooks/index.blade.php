@extends('user.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{ asset('css/resources-listing.css') }}">
@endsection

@section('content')

<section class="books">
	<header>
		<span>My Books</span>
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
			<th>Actions</th>
		</tr>
		<tr colspan="4">
			<td colspan="4">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($books as $book)
			<tr>
				<td>{{$book['id']}}</td>
				<td> {{$book['author']}}</td>
				<td> {{$book['title']}} </td>
				<td>
					<div class="operations-container">
						<a href="/mybooks/{{$book['id']}}">view</a>
						<form action="/mybooks/{{ $book['id'] }}" method="post">
							@csrf
							@method('delete')
							<input type="submit" value="return back to the shelf">
						</form>
					</div>
				</td>
			</tr>
		@endforeach
	</table>
</section>

@endsection