<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// get all posts
Route::get('/', function () {

    return view('posts', ['posts' => Post::latest()->with('category')->get()]);
});

// get particular post
Route::get('/posts/{post}', function ($id) {

    return view('post', ['post' => Post::findOrFail($id)]);
});

// get all posts based on the category
Route::get('/categories/{category:name}', function (Category $category) {

    return view('posts', ['posts' => Post::latest()->with('category')->where('category_id', $category->id)->get()]);
});

Route::get('/{user:username}/posts', function (User $user) {
    return view('posts', ['posts' => Post::latest()->with('category')->where('user_id', $user->id)->get()]);
});
