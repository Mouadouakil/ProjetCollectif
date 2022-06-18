<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    use HasFactory;
    protected $table='immeuble';
    protected $fillable=[
        
       
            'name',
            'nbrappartement',
            'etage',
            'adresse',
            'nomSyndicat',
    ];
}
