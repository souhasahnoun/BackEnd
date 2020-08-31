<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caisse extends Model
{ 
 protected $fillable = ['date', 'cloture','montant_final','fond_caisse','login','magasin_id','client_id','utilisateur_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
     public function utilisateur()
{
    return $this->belongsTo(Utilisateur::class);
}
     public function client()
{
    return $this->belongsTo(Client::class);
}
public function depenses()
{
    return $this->hasMany(Depense::class);
}
public function entreecaisses()
{
    return $this->hasMany(Entreecaisse::class);
}
public function tickets()
{
    return $this->hasMany(Ticket::class);
}
}