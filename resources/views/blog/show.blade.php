@extends('blog/layout')

@section('content')

    <h1>Blog titel: {{ $blog->titel }}</h1>
            
            {{ $blog->blogtext }} </br></br>
            
            <img  src="{{url('uploads/'.$blog->filename)}}" alt="{{$blog->filename}}" style="width: 200px; height: auto;"></br></br>

    <a href="/blog/{{$blog->id }}/edit">Pas blog aan</a>

<style>
img {
    widht: 50px;
    heigth: 50px;
}
</style>

@endsection