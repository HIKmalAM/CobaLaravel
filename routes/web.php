<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
// Illuminate\Auth\AuthManager

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
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'active' => 'about',
        'name' => 'Endi Efendi',
        'email' => 'endi.efendi@gmail.com',
        'image' => 'efendi.png'
    ]);
});


Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);


Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories', function () {
    return view('categories',[
        'title' => 'list Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/dashboard', function (Category $category) {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard', function (Category $category) {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


// Route::get('/categories/{category:slug}', function (Category $category) {
//     // return view('category');
//     // dd($category->posts());
//     // return view('category',[
//     //     'title' => $category->name,
//     //     'posts' => $category->posts(),
//     //     'category' => $category->name
//     // ]);
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts()->load('category','author')
//     ]);
// });

// iini jalan nice
// Route::get('/authors/{user:username}', function (User $user) {
//     return view('posts',[
//         'title' => 'user post',
//         'posts' => $user->posts()
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts',[
//         'title' => "Post By $author->name",
//         'active' => 'authors',
//         'posts' => $author->posts()->load('category', 'author')
//     ]);
// });


// Route::get('/author/{author:username}', function (User $author) {
// //     echo 'a';
//     $validatedData= array(
//         'name' => 'namamasuk',
//         'username' => 'usernamamasuk',
//         'email' => 'admin@gmail.com',
//         'password' => 'masuk'
//     );
// User::created($validatedData);

//     return view('categories',[
//         'title' => 'list Categories',
//         'active' => 'categories',
//         'categories' => Category::all()
//     ]);
// });




// Route::get('/posts/{post:slug}', [PostController::class,'show']);
// Route::get('/posts/{slug}', [PostController::class,'show']);

// kalo ini dikirim id aja ==> Route::get('/posts/{post}', [PostController::class,'show']);

// Route::get('/categories/{category}', [PostController::class,'show']);


