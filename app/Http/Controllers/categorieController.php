<?php

namespace App\Http\Controllers;

use App\blog;
use Illuminate\Http\Request;
use App\categorieSelect;
use App\categorie;


class categorieController extends Controller
{
    public function create(Request $request) {

        request()->validate([
            'categorienaam' => 'required'
        ]);

        $categorie = new categorieSelect;
       
        $categorie->categorieOption = $request->categorienaam;
        $categorie->save();
         
        return back();
       
    }
}
