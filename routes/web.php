<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'name' => 'Endi Efendi',
        'email' => 'endi.efendi@gmail.com',
        'image' => 'efendi.png'
    ]);
});



Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class,'show']);







Route::get('/categories', function () {
    // echo Category::all();
    return view('categories',[
        'title' => 'list Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // return view('category');
    // dd($category->posts());
    // return view('category',[
    //     'title' => $category->name,
    //     'posts' => $category->posts(),
    //     'category' => $category->name
    // ]);
    return view('posts',[
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts()->load('category','author')
    ]);
});

// iini jalan nice
// Route::get('/authors/{user:username}', function (User $user) {
//     return view('posts',[
//         'title' => 'user post',
//         'posts' => $user->posts()
//     ]);
// });

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts',[
        'title' => "Post By $author->name",
        'posts' => $author->posts()->load('category', 'author')
    ]);
});






// Route::get('/posts/{post:slug}', [PostController::class,'show']);
// Route::get('/posts/{slug}', [PostController::class,'show']);

// kalo ini dikirim id aja ==> Route::get('/posts/{post}', [PostController::class,'show']);

// Route::get('/categories/{category}', [PostController::class,'show']);


