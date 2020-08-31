<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blclient extends Model
{
      protected $fillable = ['disabled','document_id'];
     

     public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
