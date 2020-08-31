<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = ['num', 'annee','magasin_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}}
