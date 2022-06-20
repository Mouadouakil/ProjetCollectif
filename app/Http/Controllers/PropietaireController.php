<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proprietaire;

class PropietaireController extends Controller
{
    public function insert(Request $request){
        $propietaire=new Proprietaire();
        $propietaire->name=$request->input('name');
    
        $propietaire->email=$request->input('email');
        $propietaire->telephone=$request->input('telephone');
        $propietaire->numeroappartement=$request->input('numappartement');
        $propietaire->nomImmeuble=$request->input('nomimmeuble');
        $propietaire->save();
        return redirect('/propretaire')->with('statut',"Product Added Successfully");
}
}