<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
	public function index() {
		$role = auth()->user()->role;
		if ($role == "Admin")
			return view('admin.app.profile');
		else
			return view('user.app.profile');
	}

    public function update(Request $request) {
		$this-> validate(request(), [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255'],
			'password' => ['required', 'string', 'min:8'],
		]);
		
		$user = User::find($request['id']);
		// dump($request);
		$user->name = $request['name'];
		$user->email = $request['email'];
		$user->password = $request['password'];
		$user->save();
		return redirect('/dashboard');
	}
}
