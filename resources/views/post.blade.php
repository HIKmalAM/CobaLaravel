@extends('layouts.main')
{{-- dumb die @dd($post) --}}
@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By. Efendi in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
        <a href="/posts">back</a>
    </article>
@endsection
