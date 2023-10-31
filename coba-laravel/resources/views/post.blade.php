@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
    <article class="mb-5">
        <h2> <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }} </p>
    </article>

    <a href="/blog">Back to Posts</a>
    @endforeach
@endsection