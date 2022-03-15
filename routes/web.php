<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Iqbal",
        "email" => "iqbal@gmail.com",
        "image" => "ibal.jpg",
        "title" => "About"
    ]);
});

Route::get('/posts', [PostController::class,'index']);

//halaman single post
// Route model binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
