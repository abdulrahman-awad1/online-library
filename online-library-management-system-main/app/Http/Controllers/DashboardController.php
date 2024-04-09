<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class DashboardController extends Controller
{
	public function index() {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			$books = Book::take(3)->get();
			$students = User::where('role', 'Student')->take(3)->get();
			$borrowedbooks = Book::where('user_id', '<>', null)->take(3)->get();
			return view('admin.app.dashboard', ["books" => $books, "students" => $students, "borrowedbooks" => $borrowedbooks]);
		}
		else
		{
			$books = Book::where('user_id', null)->take(3)->get();
			$borrowedbooks = Book::where('user_id', auth()->user()->id)->take(3)->get();
			return view('user.app.dashboard', ["books" => $books, "borrowedbooks" => $borrowedbooks]);
		}
	}

}
