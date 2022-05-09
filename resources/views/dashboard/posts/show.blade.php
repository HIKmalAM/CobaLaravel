@extends('dashboard.layouts.main')
@section('container')

<div class="container">
  <div class="row my-3">
      <div class="col-lg-8">

          <h2>{{ $post->title }}</h2>
        
          <a href="/dashboard/posts" class="btn btn-success"> Back to my list posts</a>
          <a href="" class="btn btn-warning"> Edit</a>
          <a href="" class="btn btn-danger"> Delete</a>
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top img-fluid my-2" alt="{{ $post->category->name }}">
          
          <article>{!! $post->body !!}</article>

      </div>
  </div>
</div>
    
@endsection


