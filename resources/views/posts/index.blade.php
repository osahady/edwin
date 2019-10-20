@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($posts as $post)
            
            <li> 
                <a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                    <div class="image-container">
                            <img src="{{ $post->path }}" alt="" width="25%">
                    </div>
                </a>
                
            </li>
        @endforeach
    </ul>

@endsection