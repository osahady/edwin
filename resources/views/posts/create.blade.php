@extends('layouts.app')

@section('content')
    <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" >
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <input type="text" name="content" class="form-control">
        </div>
        <div class="form-group">
            <label for="file">Upload File:</label>
            <input type="file" name="fileName" id="file" class="form-control">
        </div>        
        <input type="submit" name="submit" value="submit" class="btn btn-info">
    </form>

    

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>   
    @endif

   

    

   

@endsection



