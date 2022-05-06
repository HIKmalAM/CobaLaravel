@extends('layouts.main')
{{-- dumb die @dd($posts) --}}
@section('container')


<ul>
@foreach ($categories as $category)
        <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
@endforeach
</ul>
@endsection
