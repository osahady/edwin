@extends('layouts.app')
@section('content')
    <h1>Edit Post</h1>
    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        <input type="text" name="title" value="{{ $post->title }}">
        <input type="text" name="content" value="{{ $post->content }}">
        <input type="submit" name="submit" value="Update">
    </form>

    <form  action="/posts/{{ $post->id }}" method="post">
       
        @csrf
        @method('DELETE')
        <input type="hidden" name="_mehtod" value="DELETE">
        <input type="submit" value="DELETE">
    </form>
@endsection