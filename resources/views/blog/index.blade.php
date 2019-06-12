@extends('blog/layout')

@section('content')

    <h1>Blog overzicht</h1>
            
    @foreach ($blogs as $blog)

<li>
    <img  src="{{url('uploads/'.$blog->filename)}}" alt="{{$blog->filename}}" style="width: 20px; height: auto;">
    <a href="/blog/ {{ $blog->id }}">
    {{$blog->titel}}
    </a></br></br>
</li>

@endforeach

</br><a href="/blog/create">Maak een nieuwe blog</a>

@endsection