<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
         
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::all()
        ]);
    }

    public function show($slug){
        // print_r ($slug); exit;
        // $adadda = Post::find($slug);
        // $adadda = Post::find($slug, 'slug');
        // $adadda = Post::where($slug,'slug');
        // $adadda = Post::where('slug', $slug)->first();
        // echo 'aa';
        // print_r ($adadda[0]); exit;
        // return view('post', [
        //     'title' => 'single post',
        //     'post' => Post::find($slug)
        // ]);


        return view('post', [
            'title' => 'single post',
            // 'post' => Post::find($slug)
            'post' => Post::where('slug', $slug)->first()
            // 'post' => Post::find(3)
        ]);
    }
}
