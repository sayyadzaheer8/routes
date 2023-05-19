<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class pageController extends Controller
{
    public function first(){
        return view('first');
    }

    public function show($post_id) {
        $posts = posts::find($post_id);
        if (!$posts) {
            abort(404);
        }
        return view(‘show’, [‘post’ => $post]);
    }

}
