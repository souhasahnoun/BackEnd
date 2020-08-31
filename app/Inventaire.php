<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
   
     protected $fillable = ['module','operation','qte','QteStock', 'date','login','produit_id','magasin_id'];

     public function magasins()
{
    return $this->belongsTo(Magasin::class);
}
public function produits()
{
    return $this->hasMany(Produit::class);
}

}
