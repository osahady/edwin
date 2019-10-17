@extends('layouts.app')

@section('content')
    <form method="POST" action="/posts">
        @csrf
        <input type="text" name="title">
        <input type="text" name="content">
        <input type="submit" name="submit" value="submit">
    </form>
@endsection



