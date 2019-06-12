@extends('blog/layout')

@section('content')

    <h1>Blog titel: {{ $blog->titel }}</h1>
            
            {{ $blog->blogtext }} </br></br>
            

    <a href="/blog/{{$blog->id }}/edit">Pas blog aan</a>



@endsection