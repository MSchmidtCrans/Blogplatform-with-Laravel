@extends('blog/layout')

@section('content')

<div class="container">
    <h1>Blog titel: {{ $blog->titel }}</h1>
</div>

<div class="container">
            {{ $blog->blogtext }} </br></br>
            
            <img  src="{{url('uploads/'.$blog->filename)}}" alt="{{$blog->filename}}" style="width: 200px; height: auto;"></br></br>

    <a href="/blog/{{$blog->id }}/edit" class="btn btn-primary mb-2">Pas blog aan</a></br>
    <a href="/blog" class="btn btn-secondary">Terug naar Blog overzicht</a></br>
</div>


    @if (!$blog->categories->isEmpty())
<div class="container">
         <p>Categories: </p>
        @foreach ($blog->categories as $categorie)

            <li>
                {{ $categorie->categorie }}
            </li>

        @endforeach

    @else 
    <div class="container">
        <p>Geen categorieen aangezet in deze blog</p>
    </div>
    @endif
</div>

@endsection