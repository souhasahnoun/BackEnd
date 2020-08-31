<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
     protected $fillable = ['login', 'password','retaper_password','designation','magasin_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
public function personnels()
{
    return $this->hasMany(Personnel::class);
}

public function caisses()
{
    return $this->hasMany(Caisse::class);
}
public function garenties()
{
    return $this->hasMany(Garentie::class);
}
public function droits()
    {
        return $this->belongsToMany(Droit::class);
    }
}
