<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rscl extends Model
{
   protected $fillable = ['date', 'taux','montant','rs','net','etat_pay','imp','debut','fin','reglementcls_id','client_id'];

     public function clients()
{
    return $this->belongsTo(Client::class);
}
public function reglementcls()
{
    return $this->belongsTo(Reglementcl::class);
}
}
