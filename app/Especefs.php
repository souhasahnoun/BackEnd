<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especefs extends Model
{
    protected $fillable = ['paiementfrs_id'];
   

     public function paiementfrs()
    {
        return $this->belongsTo(Paiementfr::class);
    }
}
