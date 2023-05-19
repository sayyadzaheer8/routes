<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class CreateController extends Controller
{
    public function create(){
        return view('create');
    }
    //submit post to db

    public function store(Request $request){
         //dd($request->all());



        $blog = new \App\Models\Posts;
        $blog->title = $request->title;
        $blog->author = $request->author;
        $blog->content = $request->content;

        $blog->save();
        return 'post submitted successfully ';
    }
}


