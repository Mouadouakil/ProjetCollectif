<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Immeuble;

class ProprieteController extends Controller
{
     public function insertImmeuble(Request $request){
    $immeuble=new Immeuble();
    $immeuble->name=$request->input('nom');
    $immeuble->adresse=$request->input('adresse');
    $immeuble->nbrappartement=$request->input('nbrapp');
    $immeuble->etage=$request->input('etage');
    $immeuble->nomSyndicat=$request->input('nomsyndicat');
   
    $immeuble->save();
   // $this->sendEmail();

    return redirect('/propriete')->with('statut',"Product Added Successfully");
}
}