<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$books = Book::all();
		$role = auth()->user()->role;
		if ($role == "Admin")
			return view('admin.books.index', ["books" => $books]);
		else
			return abort(401);
	}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
			return view('admin.books.create');
		else
			return abort(401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			Book::create([
				'title' => $request->title,
				'author' => $request->author,
				'content' => $request->content,
			]);
			return redirect('/books');
		}
		else
			return abort(401);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			$book = Book::find($id);
			return view("admin.books.show", ['book' => $book]);
		}
		else
			return abort(401);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			$book = Book::find($id);
			return view("admin.books.edit", ['book' => $book]);
		}
		else
			return abort(401);
	}

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			$book = Book::find($id);
			$book->title = $request['title'];
			$book->author = $request['author'];
			$book->content = $request['content'];
			$book->save();
			return redirect('/books');
		}
		else
			return abort(401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			Book::destroy($id);
			return redirect('/books');
		}
		else
			return abort(401);
    }
}
