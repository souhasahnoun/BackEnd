<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casier extends Model
{
     protected $fillable = ['num', 'date','login','magasin_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
public function receptions()
{
	return $this->hasMany(Reception::class);
}
}
