<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/posts/{Post:slug}', [PostController::class,'show']);


// kalo ini dikirim id aja ==> Route::get('/posts/{post}', [PostController::class,'show']);