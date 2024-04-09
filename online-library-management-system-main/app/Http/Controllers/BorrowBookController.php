<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BorrowBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
		$role = auth()->user()->role;
		if ($role == "Student")
		{
			$books = Book::where('user_id', auth()->user()->id)->get();
			return view('user.mybooks.index', ["books" => $books]);
		}
		else
		{
			$books = Book::where('user_id', '<>', null)->get();
			return view('admin.borrowedbooks.index', ["books" => $books]);
		}
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		// dump($request['book_id']);
        $book = Book::find($request['book_id']);
		$book->update(['user_id' => auth()->user()->id]);
		return redirect('/bookslibrary');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
		$book = Book::find($id);
		return view("user.mybooks.show", ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
		$book->update(['user_id' => null]);
		return redirect('/mybooks');
    }
}
