@extends('admin.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{asset('css/resources-listing.css')}}">
@endsection

@section('content')
<section class="top">
	<form action="/students" method="GET">
		<input type="text" name="id" placeholder="Search students...">
		<input type="submit" value="search">
	</form>
</section>
<section class="students">
	<header>
		<span>Students</span>
	</header>
	<table>
		<tr colspan="5">
			<td colspan="5">
				<div class="separator"></div>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Joined at</th>
			<th>Actions</th>
		</tr>
		<tr colspan="5">
			<td colspan="5">
				<div class="separator"></div>
			</td>
		</tr>
		@foreach ($students as $student)
			<tr>
				<td>{{$student['id']}}</td>
				<td> {{$student['name']}} </td>
				<td> {{$student['email']}} </td>
				<td> {{$student['created_at']}} </td>
				<td>
					<div class="operations-container">
						<a href="/students/{{$student['id']}}">view</a>
					</div>
				</td>
			</tr>
		@endforeach
	</table>
</section>

@endsection