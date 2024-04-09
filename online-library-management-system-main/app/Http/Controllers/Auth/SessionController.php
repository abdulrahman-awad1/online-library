<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SessionController extends Controller
{
	public function index() {
		if (auth()->check())
		{
			$user = auth()->user();
			auth()->login($user);
			return redirect('/dashboard');
		}
		else
		{
			return view('welcome');
		}
	}

	public function create() {
		return view('auth.login');
	}

	public function store() {
		if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
		return redirect('/dashboard');
	}

	public function destroy() {
		auth()->logout();
		return redirect('/');
	}
}
