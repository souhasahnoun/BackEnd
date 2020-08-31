<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracabilite extends Model
{
    protected $fillable = ['login', 'date','time','objet','action'];
}
