@extends('blog/layout')

@section('content')

    <div class="container text-center">
        <h1 >Maak hier een nieuwe blog</h1>
    </div>

    <div class='container'>
            <form  method="post"  action="/blog" enctype="multipart/form-data">
        
                @csrf
                <div class="form-group">
                    <input type="text" name="titel" class="form-control" id="" placeholder="Blog titel"></br></br>
                    <textarea name="blogtext" class="form-control" id="" cols="60" rows="6" placeholder="Type uw blog"></textarea></br>
                </div>

                <div class="form-check-inline form-group">
                        <input type="checkbox" class="form-check-input" id="" name="check1"> {{ $x[0]->categorieOption }}
                </div> 

                <div class="form-group">
                    <label for="picture">Kies een afbeelding: </label>
                    <input type="file" name="picture" class="form-control"></br>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info form-control">Opslaan</button>
                </div>
                <div class="form-group">    
                    <a href="/blog" class="btn btn-info form-control">Terug naar Blog overzicht</a></br>
                </div>
            </form>
    
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