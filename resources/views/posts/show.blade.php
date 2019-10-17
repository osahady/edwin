@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.edit', $post->id) }}"><h1>{{ $post->title }}</h1></a>
    <p>{{ $post->content }}</p>
@endsection