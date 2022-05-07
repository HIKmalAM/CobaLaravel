@extends('layouts.main')
{{-- dumb die @dd($posts) --}}

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>
<div class="row mb-3 justify-content-center">
  <div class="col-md-6 ">
    <form action="/posts">
      <div class="input-group mb-3">
        <input name="search" type="text" class="form-control" placeholder="Search ... " aria-label="Search ..." >
        <button class="btn btn-danger" type="submit" >Search </button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h5><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
        <p>
            <small class="text-muted" >
                By. <a href="authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
      <p>{{ $posts[0]->excerpt }}</p>
      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more </a>
    </div>
  </div>
@else
    <p class="text-center fs-4"> No Post</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="position-absolute p-3 py-3 px-2" style="background-color: rgba(0,0,0,0.7)"><a class="text-decoration-none text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                      <small class="text-muted" >
                          By. <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                          {{ $post->created_at->diffForHumans() }}
                      </small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a class="btn btn-primary" href="/posts/{{ $post->slug }}">read more ...</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
