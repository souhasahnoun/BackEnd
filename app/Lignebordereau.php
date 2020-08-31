<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lignebordereau extends Model
{
   protected $fillable = ['source', 'source_id','montant','rs','num','type','banque','date','etat','type_ch','created','login','reglementcls_id','bordereaus_id'];
   
   public function reglementcls()
{
    return $this->belongsTo(Reglementcl::class);
}
public function bordereaux()
{
    return $this->belongsTo(Bordereau::class);
}
}
