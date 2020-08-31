<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
     
    protected $fillable = ['libelle', 'rib','adresse', 'titulaire_cheque','titulaire_traite'];



     public function souches()
{
    return $this->hasMany(Souche::class);
}
 public function paiementfrs()
{
    return $this->hasMany(Paiementfr::class);
}
 public function reglementcls()
{
    return $this->hasMany(Reglementcl::class);
}
 public function bordereaux()
{
    return $this->hasMany(Bordereau::class);
}
}
