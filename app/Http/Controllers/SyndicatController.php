<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Syndicat;
use App\Mail\Testmail;

class SyndicatController extends Controller
{
  /*  public function sendEmail(){
        $details=[
            'title'=>'mail from responsable',
            'body' =>'this is for testing'
        ];
       Mail::to("aliouahli1@gmail.com")->send(new Testmail($details));
       
        }*/
    public function insert(Request $request){
        $syndicat=new Syndicat();
        $syndicat->name=$request->input('name');
        $syndicat->adresse=$request->input('adresse');
        $syndicat->email=$request->input('email');
        $syndicat->telephone=$request->input('telephone');
        $syndicat->password=$request->input('password');
        $syndicat->CIN=$request->input('cin');
        $syndicat->nomImmeuble=$request->input('nomimmeuble');
        $syndicat->save();
       // $this->sendEmail();

        return redirect('/syndicat')->with('statut',"Product Added Successfully");
        
    }

}
