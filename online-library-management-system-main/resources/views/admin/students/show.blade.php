@extends('admin.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{asset('css/resource-listing.css')}}">
@endsection

@section('content')
<section class="student">
	<i class='bx bxs-user-circle profile' ></i>
	<table>
		<tr>
			<td>ID:</td>
			<td>{{$student['id']}}</td>
		</tr>
		<tr>
			<td>Name:</td>
			<td>{{$student['name']}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$student['email']}}</td>
		</tr>
		<tr>
			<td>Joined at:</td>
			<td>{{$student['created_at']}}</td>
		</tr>
	</table>
</section>
@endsection