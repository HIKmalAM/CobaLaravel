<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //  dd(request('search'));
        // return view('posts', [
        //     'title' => 'All Posts',
        //     'active' => 'posts',
        //     // 'posts' => Post::all()
        //     'posts' => Post::latest()->get()
        // ]);

        $post = Post::latest();

        if (request('search')){
            $post->where('title', 'like', '%'. request('search') .'%')
                 ->orWhere('body', 'like', '%'. request('search') .'%');
        }

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'posts',
            'posts' => $post->get()
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

        // ini udah jalan tapi mau ganti author
        // return view('post', [
        //     'title' => 'single post',
        //     // 'post' => Post::find($slug)
        //     'post' => Post::where('slug', $slug)->first()
        //     // 'post' => Post::find(3)
        // ]);
        return view('post', [
            'title' => 'single post',
            'active' => 'posts',
            // 'post' => Post::find($slug)
            'post' => Post::where('slug', $slug)->first()
            // 'post' => Post::find(3)
        ]);
    }
}
