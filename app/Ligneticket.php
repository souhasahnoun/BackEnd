<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ligneticket extends Model
{
    
     protected $fillable = ['prix', 'qantite','tva','designation','remise','qte_ret','puachat','prixrev','ticket_id','produit_id'];

     public function tickets()
{
    return $this->belongsTo(Ticket::class);
}
 public function produits()
{
    return $this->belongsTo(Produit::class);
}

}
