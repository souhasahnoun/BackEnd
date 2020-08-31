<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreecaisse extends Model
{
     protected $fillable = ['montant', 'type','date','designation','login','beneficiaire','num_cheque','banque','caisse_id'];

     public function caisses()
{
    return $this->belongsTo(Caisse::class);
}
}
