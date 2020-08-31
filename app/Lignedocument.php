<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lignedocument extends Model
{
     protected $fillable = ['prix', 'qte','tva','designation','remise','document_id','produit_id'];

     public function documents()
{
    return $this->belongsTo(Document::class);
}
 public function produits()
{
    return $this->belongsTo(Produit::class);
}

}
