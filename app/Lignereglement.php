<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lignereglement extends Model
{
      protected $fillable = ['montant','document_id','reglementcls_id'];
}
