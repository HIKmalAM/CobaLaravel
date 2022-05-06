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
        // echo 'aa';
        // print_r ($adadda[0]); exit;
        // return view('post', [
        //     'title' => 'single post',
        //     'post' => Post::find($slug)
        // ]);


        return view('post', [
            'title' => 'single post',
            // 'post' => Post::where('slug',$slug)
            'post' => Post::find(3)
        ]);
    }
}
