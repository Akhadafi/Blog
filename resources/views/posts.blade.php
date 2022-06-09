{{-- @dd($posts) --}}

@extends('layouts.main')

@section('content')
  @foreach ($posts as $post)
  <article>
    <h2><a href="/posts/{{ $post["slug"] }}">{{ $post["judul"] }}</a></h2>
    <h5>By: {{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
  </article>
  @endforeach
@endsection