@extends('layouts.main')

@section('container')
    <div class="container mt-3">
    @foreach ($posts as $post)
        <article class="mb">
        <h2 class="h2">
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5 class="h5">{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
    </div> 
@endsection