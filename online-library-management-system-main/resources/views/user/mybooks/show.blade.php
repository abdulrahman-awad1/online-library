@extends('user.app.app-layout')

@section('css-specific')
<link rel="stylesheet" href="{{asset('css/resource-listing.css')}}">
@endsection

@section('content')
<section class="book">
	<header>{{$book['title']}}</header>
	<div class="name">&commat;{{$book['author']}}</div>
	<div class="content">{{$book['content']}}</div>
</section>
@endsection