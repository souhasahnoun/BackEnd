<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
     protected $fillable = ['code_frs', 'raison_social','email', 'site_web',
    'tel', 'gsm','personne_contacter', 'fax','adresse', 'date_aff','etat', 'mf','rc', 'archive'];

     public function document()
{
    return $this->hasMany(Document::class);
}
public function rsfrs()
{
	return $this->hasMany(Rsfr::class);
}
}
