@extends('blog/layout')

@section('content')

    <div class="container text-center">
        <h1 >Maak hier een nieuwe blog</h1>
    </div>

    <div class='container'>
            <form  method="post"  action="/blog" enctype="multipart/form-data">
        
                @csrf
                <div class="form-group row">
                    <input type="text" name="titel" class="form-control" id="" placeholder="Blog titel"></br></br>
                    <textarea name="blogtext" class="form-control" id="" cols="60" rows="6" placeholder="Type uw blog"></textarea></br>
                </div>
            
                    
                @foreach ($x as $option)
                    <div class="form-check-inline form-group row">
                            <input type="checkbox" class="form-check-input" id="" name="categorieChoice[]" value="{{ $option->categorieOption }}"> {{ $option->categorieOption }}
                    </div>
                @endforeach

                <form action="/blog" method="post" >
                    @csrf
                    <div class="form-group row">
                            <div class="col-xs-3 mr-2">
                                <input type="text" name="categorienaam" class="form-control" placeholder="Nieuwe categorie" id="">   
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Categorie opslaan</button>
                            </div> 
                    </div>          

                         
                    </form>
                
                
                <div class="form-group row">
                    <label for="picture">Kies een afbeelding: </label>
                    <input type="file" name="picture" class="form-control"></br>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-info form-control">Opslaan</button>
                </div>
                <div class="form-group row">    
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