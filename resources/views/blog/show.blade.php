@extends('blog/layout')

@section('content')

    <h1>Blog titel: {{ $blog->titel }}</h1>
            
            {{ $blog->blogtext }} </br></br>
            
            <img  src="{{url('uploads/'.$blog->filename)}}" alt="{{$blog->filename}}" style="width: 200px; height: auto;"></br></br>

    <a href="/blog/{{$blog->id }}/edit">Pas blog aan</a></br>
    <a href="/blog">Terug naar Blog overzicht</a></br>

    @if (!$blog->categories->isEmpty())

         <p>Categories: </p>
        @foreach ($blog->categories as $categorie)

            <li>
                {{ $categorie->categorie }}
            </li>

        @endforeach

    @else 
        <p>Geen categorieen aangezet in deze blog</p>

    @endif


@endsection