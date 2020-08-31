<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chequecadeaucls extends Model
{
   protected $fillable = ['reglementcls_id'];
   

     public function reglementcls()
    {
        return $this->belongsTo(Reglementcl::class);
    }
}
