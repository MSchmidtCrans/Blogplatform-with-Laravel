@extends('blog/layout')

@section('content')

<div class="container">

        <div class="container text-center">
                <h1>Pas de blog aan.</h1>
                <img  src="{{url('uploads/'.$blog->filename)}}" class="img-thumbnail" alt="{{$blog->filename}}" style="width: 150px; height: auto;"></br>
        <div>

        <div class="container">
                <form action="/blog/ {{ $blog->id }}" method="post" enctype="multipart/form-data">
                
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                                <input type="text" name="titel" class="form-control" id="" value= "{{ $blog->titel }}">
                        </div>

                        <div class="form-group">        
                                <textarea name="blogtext" class="form-control" id="" cols="60" rows="6">{{ $blog->blogtext }}</textarea></br>
                        </div>
               
                        <div class="form-group">
                        <button type="submit" class="btn btn-info form-control">Update blog</button>
                        </div>
                        
                </form>
        </div>

        <div class="container">
                        <form action="/blog/ {{ $blog->id }}" method="post">

                                @csrf
                                @method('DELETE')
                                <div class="form-group">
                                        <button type="submit" class="btn btn-danger form-control">Verwijder blog</button>
                                </div>
                                <div class="form-group">        
                                        <a href="/blog" class="btn btn-info form-control">Terug naar Blog overzicht</a></br>
                                </div>

                        </form>
                        
        </div>
        
        @if ($errors->any())
        <div class="container bg-danger text-light">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
        </div>
        @endif

</div>
@endsection