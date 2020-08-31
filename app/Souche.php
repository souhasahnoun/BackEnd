<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souche extends Model
{
    
     protected $fillable = ['num', 'du','au','etat','banque_id'];

     public function banque()
{
    return $this->belongsTo(Banque::class);
}
}
