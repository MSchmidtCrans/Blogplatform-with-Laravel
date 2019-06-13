@extends('blog/layout')

@section('content')

<div class="container-fluid">
        <div class="container">
        <h1>Pas de blog aan.</h1>
        <div>

        <div class="container">
                <form action="/blog/ {{ $blog->id }}" method="post" enctype="multipart/form-data">
                
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                                <input type="text" name="titel" class="form-control" id="" value= "{{ $blog->titel }}"></br></br>
                                <textarea name="blogtext" class="form-control" id="" cols="60" rows="6">{{ $blog->blogtext }}</textarea></br>
                        </div>
                        <div class="form-group">
                                <label for="picture">Kies een afbeelding: </label> <img  src="{{url('uploads/'.$blog->filename)}}" alt="{{$blog->filename}}" style="width: 50px; height: auto;"></br></br>
                                <input type="file" name="picture" class="form-control"></br></br>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">Update blog</button>
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
                                        <a href="/blog" class="btn btn-secondary form-control">Terug naar Blog overzicht</a></br>
                                </div>

                        </form>
                        
        </div>
</div>
@endsection