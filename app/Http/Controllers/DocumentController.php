<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController  extends Controller
{
    public function insert(Request $request){
        $document=new Document();
        $document->nom=$request->input('nom');

        $document->lien=$request->input('lien');
        $document->save();
        return redirect('/apps-filemanager')->with('statut',"Product Added Successfully");
    }
}
