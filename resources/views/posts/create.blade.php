@extends('layouts.app')

@section('content')
    <form method="POST" action="/posts">
        @csrf
        <input type="text" name="title" class="form-control" >
        <input type="text" name="content" class="form-control">
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



