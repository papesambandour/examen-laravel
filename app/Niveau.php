<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $guarded = [];
    public $timestamps = false;
    public  function etudiants()
    {
        return $this->hasMany(\App\Etudiant::class,'niveau_id','id');
    }
}
