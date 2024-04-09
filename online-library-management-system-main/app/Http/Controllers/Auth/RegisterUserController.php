<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterUserController extends Controller
{
    public function create() {
		return view('auth.register');
	}

	public function store() {
		$this-> validate(request(), [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:8'],
			'role' => 'required'
		]);

		$user = User::create(request(['name', 'email', 'password', 'role']));

		auth()->login($user);

		return redirect('/dashboard');
	}
}
