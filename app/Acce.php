<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acce extends Model
{
     protected $fillable = ['droit_id','utilisateur_id','log_usr'];
}
