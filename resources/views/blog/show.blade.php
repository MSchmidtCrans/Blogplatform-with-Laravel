@extends('blog/layout')

@section('content')

    <h1>Blog titel: {{ $blog->titel }}</h1>
            
            {{ $blog->blogtext }}

@endsection