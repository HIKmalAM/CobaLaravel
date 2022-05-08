@extends('layouts.main')
{{-- dumb die @dd($post) --}}
@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">

            <h2>{{ $post->title }}</h2>
            <p>
                By. <a href="posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            
            <article>{!! $post->body !!}</article>
            
            <a href="/posts">back</a>

        </div>
    </div>
</div>
@endsection
