<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){

        $request->validate([
            'query'=>'required'
        ]);
        $query = $request->input('query');

        $results = Book::where('title','like', '%' . $query . '%')
            ->orWhere('author','like', '%' . $query . '%')->get();
        return view('user.app.result',compact('results'));


    }

}
