<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    
    protected $fillable = ['libelle', 'logo','etat'];

    public function produits()
{
	return $this->hasMany(Produit::class);
}
    
}
