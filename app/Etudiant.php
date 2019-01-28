<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $guarded = [];
    public $timestamps = false ;
    public  function niveau()
    {
        return $this->belongsTo(\App\Niveau::class,'niveau_id','id');
    }

}
