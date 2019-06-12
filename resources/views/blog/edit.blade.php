@extends('blog/layout')

@section('content')

  <h1>Pas de blog aan.</h1>

  <form action="/blog/ {{ $blog->id }}" method="post" enctype="multipart/form-data">
  
            @csrf
            @method('PATCH')


            <input type="text" name="titel" id="" value= "{{ $blog->titel }}"></br></br>
            <textarea name="blogtext" id="" cols="60" rows="15">{{ $blog->blogtext }}</textarea></br>

            <label for="picture">Kies een afbeelding: </label>
            <input type="file" name="picture"></br></br>
        
            <button type="submit">Update blog</button>
            
    </form>

    <form action="/blog/ {{ $blog->id }}" method="post">

            @csrf
            @method('DELETE')

            <button type="submit">Verwijder blog</button>
    
    </form>

@endsection