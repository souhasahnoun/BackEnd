<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factureclient extends Model
{
      protected $fillable = ['avoir','dateavoir','document_id'];
   

     public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
