<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['code', 'date','recu','rendre','type_reg','date_reception','etat','login','magasin_id','document_id','caisse_id'];

     public function magasin()
{
    return $this->belongsTo(Magasin::class);
}
   public function document()
{
    return $this->belongsTo(Document::class);
}
public function caisse()
{
    return $this->belongsTo(Caisse::class);
}

public function lignetickets()
{
    return $this->hasMany(Ligneticket::class);
}
}