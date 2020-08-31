<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
     protected $fillable = ['ref_prod', 'nom_prod','code','mrg_ben_pub','stk_alert','image','designation','prix_achat','ristourne','points','mrg_ben_rev','prixf','prixfpub','prixfrev','prixrispub','prixrisrev','prix_revient','etat','prix_min','categorie_id','famille_id','marque_id','tva_id'];

     public function categories()
{
    return $this->belongsTo(Categorie::class);
}
public function familles()
{
    return $this->belongsTo(Famille::class);
}
public function marques()
{
    return $this->belongsTo(Marque::class);
}
 public function inventaire()
{
    return $this->hasMany(Inventaire::class);
}
 public function ligneticket()
{
    return $this->hasMany(Ligneticket::class);
}
 public function tracabilitestock()
{
    return $this->hasMany(Tracabilitestock::class);
}
 public function lignedocument()
{
    return $this->hasMany(Lignedocument::class);
}
public function tvas()
{
    return $this->belongsTo(Tva::class);
}
public function magasins()
    {
        return $this->belongsToMany(Magasin::class);
    }
    public function unites()
{
    return $this->belongsTo(Unite::class);
}
}