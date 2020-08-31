<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garentie extends Model
{
    protected $fillable = ['num', 'date','piece','accessoire','nom','tel','recu_par','panne','tache','prix','login','etat','magasin_id','utilisateur_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
public function utilisateurs()
{
    return $this->belongsTo(Utilisateur::class);
}
}