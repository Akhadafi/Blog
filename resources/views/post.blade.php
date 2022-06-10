{{-- @dd($post) --}}

@extends('layouts.main')

@section('content')
<h2>{{ $post["judul"] }}</h2>
<h5>{{ $post["author"] }}</h5>
<p>{{ $post["body"] }}</p>

<a href="/blog">Go Back</a>
@endsection