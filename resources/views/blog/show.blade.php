@extends('blog/layout')

@section('content')

<div class="container text-center">
    <h1>Blog: {{ $blog->titel }}</h1>
    <img  src="{{url('uploads/'.$blog->filename)}}" alt="{{$blog->filename}}" style="width: 200px; height: auto;">
</div>

<div class="container">
     <div class="container">       
            </br></br>
            {{ $blog->blogtext }} </br></br>

    <a href="/blog/{{$blog->id }}/edit" class="btn btn-info mb-2 btn-block">Pas blog aan</a></br>
    <a href="/blog" class="btn btn-info btn-block">Terug naar Blog overzicht</a></br>
    </div>


    @if (!$blog->categories->isEmpty())

    Categories: 

            <div class="d-inline-flex">
                

                @foreach ($blog->categories as $categorie)
                    </br>
                    <div class="bg-secondary m-2 text-light p-1 rounded">
                        {{ $categorie->categorie }}
                    </div>

                @endforeach

            @else 
            <div class="container">
                <p>Geen categorieen aangezet in deze blog</p>
            </div>

    @endif
</div>

@endsection