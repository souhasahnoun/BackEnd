<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model
{
     protected $fillable = ['libelle', 'ordre','region_id'];

     public function region()
{
    return $this->belongsTo(Region::class);
}
public function societes()
{
    return $this->hasMany(Societe::class);
}

public function garenties()
{
    return $this->hasMany(Garentie::class);
}
public function casiers()
{
    return $this->hasMany(Casier::class);
}
public function codes()
{
    return $this->hasMany(Code::class);
}
public function personnel()
{
    return $this->hasMany(Personnel::class);
}
public function utlisateur()
{
    return $this->hasMany(Utilisateur::class);
}
public function paiementpersonnel()
{
    return $this->hasMany(paiementpersonnel::class);
}
public function caisses()
{
    return $this->hasMany(Caisse::class);
}
public function tickets()
{
    return $this->hasMany(Ticket::class);
}
public function inventaire()
{
    return $this->hasMany(Inventaire::class);
}
public function tracabilitestock()
{
    return $this->hasMany(Tracabilitestock::class);
}
public function produits()
    {
        return $this->belongsToMany(Produits::class);
    }
}