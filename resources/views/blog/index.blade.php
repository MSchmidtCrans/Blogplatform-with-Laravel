@extends('blog/layout')

@section('content')

    <h1>Blog overzicht</h1>
            
    @foreach ($blogs as $blog)

<li>
    <a href="/blog/ {{ $blog->id }}">
    {{$blog->titel}}
    </a>
</li>


@endforeach

@endsection