<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use App\Models\Proprietaire;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    public function insert(Request $request){
        $depense=new Depense();
        $depense->type_depense=$request->input('type_depense');

        $depense->somme=$request->input('somme');
        $depense->date=time();
        $depense->image=$request->input('image');
        $depense->save();
        return redirect('/depense')->with('statut',"Product Added Successfully");
    }

}
