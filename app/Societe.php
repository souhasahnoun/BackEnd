<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    protected $fillable = ['prefixe', 'nom','adresse','tel','fax','gsm','email','site_web','mf','rc','rib','iban','cd','magasin_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
}
