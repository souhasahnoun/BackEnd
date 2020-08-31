<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
	protected $fillable = ['cin', 'nom','prenom','dateNaiss','tel','salaire','adresse','login','magasin_id','utilisateur_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
   public function uilisateur()
{
    return $this->belongsTo(Utilisateur::class);
}
public function paiementpersonnel()
{
    return $this->hasMany(Paiementpersonnel::class);
}
}