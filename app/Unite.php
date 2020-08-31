<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    protected $fillable = ['nom'];
   

    public function produit()
{
    return $this->hasMany(Produit::class);
}
}
