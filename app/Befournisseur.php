<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Befournisseur extends Model
{
      protected $fillable = ['import','document_id'];
   

     public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
