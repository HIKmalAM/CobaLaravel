@extends('layouts.main')
{{-- dumb die @dd($post) --}}
@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <h5>By : {{ $post->author }}</h5>
        {!! $post->body !!}
        <a href="/posts">back</a>
    </article>
@endsection
