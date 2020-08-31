<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['libelle'];

    public function magasins()
{
    return $this->hasMany(Magasin::class);
}
}
