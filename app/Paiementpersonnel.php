<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiementpersonnel extends Model
{
   protected $fillable = ['montant', 'date','date_salaire','remarque','login','magasin_id','personnel_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
   public function personnels()
{
    return $this->belongsTo(Personnel::class);
}
}
