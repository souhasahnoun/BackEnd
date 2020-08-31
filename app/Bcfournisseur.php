<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bcfournisseur extends Model
{
      protected $fillable = ['cloturer','document_id'];
   

     public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
