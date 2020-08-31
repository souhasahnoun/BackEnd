<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    
    protected $fillable = ['num', 'date','login','created','type','banque_id'];

     public function banque()
{
    return $this->belongsTo(Banque::class);
}
public function lignebordereau()
{
	return $this->hasMany(Lignebordereau::class);
}
}
