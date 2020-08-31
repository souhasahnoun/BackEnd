<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lignepaiement extends Model
{
     protected $fillable = ['montant','document_id','paiementfrs_id'];
}
