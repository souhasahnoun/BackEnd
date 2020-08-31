<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Virementfs extends Model
{
     protected $fillable = ['paiementfrs_id'];
   

     public function paiementfrs()
    {
        return $this->belongsTo(Paiementfr::class);
    }
}
