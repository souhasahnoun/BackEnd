<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsfr extends Model
{
    protected $fillable = ['date', 'taux','montant','rs','net','etat_pay','imp','etat_imp','created','debut','fin','fournisseur_id','paiementfrs_id'];

     public function fournisseurs()
{
    return $this->belongsTo(Fournisseur::class);
}
public function paiementfrs()
{
    return $this->belongsTo(Paiementfr::class);
}
}
