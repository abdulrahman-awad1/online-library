<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			if ($request->query('id') == null)
			{
				$students = User::where('role', 'Student')->get();
			}
			else
			{
				$students = User::where('role', 'Student')
								->where('id', $request->query('id'))
								->get();
			}
			return view('admin.students.index', ["students" => $students]);
		}
		else
			return abort(401);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
		$role = auth()->user()->role;
		if ($role == "Admin")
		{
			$student = User::find($id);
			return view('admin.students.show', ["student" => $student]);
		}
		else
			return abort(401);
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
        //
    }
}
