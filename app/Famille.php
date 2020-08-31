<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
   protected $fillable = ['libelle', 'merg_ben','prix','etat','categorie_id'];

     public function categorie()
{
    return $this->belongsTo(Categorie::class);
}


public function produit()
{
    return $this->hasMany(Produit::class);
}}
