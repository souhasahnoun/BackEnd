<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factavoirclient extends Model
{
    protected $fillable = ['document_id'];

     public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
