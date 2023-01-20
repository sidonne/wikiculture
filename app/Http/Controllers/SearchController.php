<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(){
        return view('start');
    }

    public function getResult(Request $request){
        //$data = Post::select('title')-> where("title", "LIKE", "%{$request-> value}%")-> get();
        //return response()->json($data);
        $search = $request->input('search');
        $data = Post::query('title')-> where('title', 'LIKE', "%{$search}%")->get();
        return redirect-> view('welcome', compact('data'));

        //return Post::select('title')-> where('title', 'like', "%{$request->term}%")-> pluck('title');
    }
}
