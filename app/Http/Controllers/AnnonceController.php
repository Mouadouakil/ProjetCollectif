<?php

namespace App\Http\Controllers;


use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController  extends Controller
{
    public function insert(Request $request){
        $annonce=new Annonce();
        $annonce->titre=$request->input('titre');

        $annonce->text=$request->input('text');
        $annonce->tag=$request->input('tag');
        $annonce->date=date("Y-m-d");
        $annonce->image=$request->input('image');
        $annonce->save();
        return redirect('/annonces#')->with('statut',"Product Added Successfully");
    }
}
