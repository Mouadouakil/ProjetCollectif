<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;
    protected $table='proprietaire';
    protected $fillable=[
        
        'name',
        'email',
        'telephone',
        'numeroappartement',
         'nomImmeuble',
    ];
}