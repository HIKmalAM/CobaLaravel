<?php

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



Route::get('/blog', function () {
        
    $blogPost = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'Judul-Post-Pertama',
            'author' => 'Endi Efendi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Sunt a dignissimos nam quidem ratione quam at facere itaque neque officia. 
            Repellendus possimus facilis illum fugit earum! Saepe ipsum porro facere.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'Judul-Post-Kedua',
            'author' => 'Qori',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Doloremque deleniti animi fuga repellat ut aspernatur, sit eaque? 
            Officia, delectus facere excepturi eum fugit illo molestias quo explicabo asperiores mollitia dicta in, quaerat provident iure repellendus porro! 
            Quis iure ipsum delectus qui sed molestias perferendis iusto similique repellat quidem, quas quaerat, facilis necessitatibus praesentium est exercitationem nulla officia corporis pariatur, eum adipisci alias molestiae repudiandae. 
            Exercitationem non neque similique pariatur eligendi laudantium vitae, eius voluptate nobis illo tenetur facilis distinctio perspiciatis eum sint libero ex doloribus nostrum placeat voluptatibus vero, facere, vel nihil corporis. 
            Amet eos nesciunt porro? Perferendis, deleniti tempora.',
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blogPost
    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    
    $blogPost = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'Judul-Post-Pertama',
            'author' => 'Endi Efendi',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Sunt a dignissimos nam quidem ratione quam at facere itaque neque officia. 
            Repellendus possimus facilis illum fugit earum! Saepe ipsum porro facere.',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'Judul-Post-Kedua',
            'author' => 'Qori',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Doloremque deleniti animi fuga repellat ut aspernatur, sit eaque? 
            Officia, delectus facere excepturi eum fugit illo molestias quo explicabo asperiores mollitia dicta in, quaerat provident iure repellendus porro! 
            Quis iure ipsum delectus qui sed molestias perferendis iusto similique repellat quidem, quas quaerat, facilis necessitatibus praesentium est exercitationem nulla officia corporis pariatur, eum adipisci alias molestiae repudiandae. 
            Exercitationem non neque similique pariatur eligendi laudantium vitae, eius voluptate nobis illo tenetur facilis distinctio perspiciatis eum sint libero ex doloribus nostrum placeat voluptatibus vero, facere, vel nihil corporis. 
            Amet eos nesciunt porro? Perferendis, deleniti tempora.',
        ],
    ];
    $new_post = [];
    foreach ($blogPost as $post){
        if($post['slug']  === $slug){
            $new_post = $post;
        }
    };

    return view('post', [
        'title' => 'single post',
        'post' => $new_post
    ]);
});