<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{
     protected $fillable = ['droit','libelle','catgdroit_id'];
     public function catgdroits()
{
    return $this->belongsTo(Catgdroit::class);
}
public function utilisateurs()
    {
        return $this->belongsToMany(Utilisateur::class);
    }
}
