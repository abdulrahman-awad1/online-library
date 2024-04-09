

@extends('user.app.app-layout')

@section('css-specific')
    <link rel="stylesheet" href="{{ asset('css/resources-listing.css') }}">
@endsection

@section('content')

    <section class="books">
        <header>
            <span>Books Library</span>
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
            @foreach ($results as $result)
                <tr>
                    <td>{{$result['id']}}</td>
                    <td> {{$result['author']}}</td>
                    <td> {{$result['title']}} </td>
                    <td>
                        <div class="operations-container">
                            <form action="/mybooks" method="POST">
                                @csrf
                                <input type="hidden" name="book_id" value="{{$result['id']}}">
                                <input type="submit" value="borrow and save in (My Books)">
                            </form>
                            {{-- <a href="">borrow<br><font color="yellow">save in (My Books)</font></a> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>

@endsection
