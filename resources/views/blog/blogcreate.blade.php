@extends('blog/layout')

@section('content')

    <h1>Maak hier een nieuwe blog</h1>
            
            <form  method="post"  action="/blog">
        
            @csrf
            
            <input type="text" name="titel" id="" placeholder="Blog titel"></br></br>
            <textarea name="blogtext" id="" cols="60" rows="15" placeholder="Type uw blog"></textarea></br>
        
            <button type="submit">Opslaan</button>
            
            </form>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
        

@endsection