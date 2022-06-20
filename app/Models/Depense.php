<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $table='depense';
    protected $fillable=[

        'type_depense',
        'somme',
        'date',
        'image',
    ];
}
