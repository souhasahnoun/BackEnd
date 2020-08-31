<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catgdroit extends Model
{
     protected $fillable = ['categ'];

    public function droit()
{
    return $this->hasMany(Droit::class);
}
}
