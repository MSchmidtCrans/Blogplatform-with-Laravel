@extends('blog/layout')

@section('content')

<div class="container text-center">
    <h1>Blog overzicht</h1>
    <a href="/blog/create" class="btn btn-primary mb-4 center">Maak een nieuwe blog</a>
</div>

<div class="container d-flex flex-wrap">

    @foreach ($blogs as $blog)

            <div class="card mx-4 my-2" style="width:300px">
                <img  src="{{url('uploads/'.$blog->filename)}}" class="card-img-top img-thumbnail img-fluid" alt="{{$blog->filename}}" style="width: 300px; height: 200px;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $blog->titel }}</h4>
                        <p class="card-text overflow-hidden" style="height: 100px;">{{ $blog->blogtext }}</p>
                        <a href="/blog/ {{ $blog->id }}" class="btn btn-primary">Open Blog</a>
                    </div>
            </div>

@endforeach
 </div>




@endsection