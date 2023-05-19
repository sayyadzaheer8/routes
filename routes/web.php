<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/show',[pageController::class,'show']);
// Route::get('/create',[CreateController::class,'create']);
// Route::post('/create',[CreateController::class,'store']);


// this will render all the posts from this list of posts you would click on one post and that will take you to another page which will be specific
Route::get('/post', [PostController::class, 'index']); 


// This will render a specific post which will come from above route which is /post. But this one is dynamic post. Which 
// is responsible for switching/swaping the post when an ID is passed in the URL
Route::get('/post/{id}', [PostController::class, 'show']); // show method is used to show a particular resource like post