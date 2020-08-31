<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracabilitestock extends Model
{
    
     protected $fillable = ['module', 'operation','qte','qtestock','login','created','produit_id','magasin_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
public function produit()
{
    return $this->belongsTo(Produit::class);
}
}
