<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reception extends Model
{
     protected $fillable = ['num', 'date','piece','accessoire','nom','tel','recu_par','panne','tache','prix','code','avance','type','etat_pay','etat','login','contact_clt','affect','partde','frais','designation','client_id','magasin_id','casier_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
public function casier()
{
    return $this->belongsTo(Casier::class);
}
public function client()
{
    return $this->belongsTo(Client::class);
}
}
