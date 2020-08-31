<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['code_clt', 'raison_social','email', 'site_web',
    'tel', 'gsm','personne_contacter', 'fax','adresse', 'date_aff','etat', 'mf','rc', 'archive','type','timbre','plafond'];



     public function receptions()
{
    return $this->hasMany(Reception::class);
}
     public function caisses()
{
    return $this->hasMany(Caisse::class);
}
 public function rscls()
{
	return $this->hasMany(Rscl::class);
}
 public function document()
{
    return $this->hasMany(Document::class);
}
    public  function document_by_type($type)
    {
        $list=array();
    foreach ($this->document as $document) {
        if($document->type==$type)
            $list->push($document);
    }
    return $list;
    }
    public function reglements($mode){      
     return  Reglementcl::where(['client'=>$this->rc,'mode'=>$mode])->get();
    }

}

