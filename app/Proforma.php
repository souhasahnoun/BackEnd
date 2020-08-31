<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    protected $fillable = ['montant','document_id'];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
