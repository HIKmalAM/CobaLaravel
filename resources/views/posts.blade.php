@extends('layouts.main')
{{-- dumb die @dd($posts) --}}
@section('container')
<h1>{{ $title }}</h1>
@foreach ($posts as $post)
    <article class="mb-3 border-bottom pb-4">
        <h4><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h4>
        <p>By. <a href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a class="text-decoration-none" href="/posts/{{ $post->slug }}">read more ...</a>
    </article>
@endforeach
@endsection
