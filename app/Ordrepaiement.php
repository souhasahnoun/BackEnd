<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordrepaiement extends Model
{
     protected $fillable = ['num', 'date','login','created','montant'];

     public function paiementfrs()
{
	return $this->hasMany(Paiementfr::class);
}
}
