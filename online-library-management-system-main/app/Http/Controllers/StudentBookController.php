<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class StudentBookController extends Controller
{
    public function index() {
		$books = Book::where('user_id', null)->get();
		// dump($books);
		return view('user.books.index', ["books" => $books]);
	}
}
