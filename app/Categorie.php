<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
     protected $fillable = ['libelle', 'etat'];

     public function produits()
{
	return $this->hasMany(Produit::class);
}
public function familles()
{
	return $this->hasMany(Famille::class);
}
}
