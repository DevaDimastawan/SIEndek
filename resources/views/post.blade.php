@extends('layouts.main')

@section('container')
    <article class="container mt-3">
        <h2 class="h2">{{ $post['title'] }}</h2>
        <h5 class="h5">{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
    <div class="container mt-3">
        <a href="/iseng">Back To Post</a>
    </div>
@endsection
