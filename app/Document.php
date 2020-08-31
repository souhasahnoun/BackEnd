<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
     protected $fillable = ['num', 'date','etat','fodec','etat_pay','type_pay','rs','etat_rs','login','date_retenu','type','date_prev','date_dec','timbre','date_fin','designation','fournisseur_id','client_id'];

public function getFillable(){
	return $this->fillable;
}
     public function fournisseurs()
{
    return $this->belongsTo(Fournisseur::class);
}
public function clients()
{
    return $this->belongsTo(Client::class);
}
 public function ticket()
{
    return $this->hasMany(Ticket::class);
}
public function paiementfrs()
    {
        return $this->belongsToMany(Paiementfr::class);
    }

    public function reglementcls()
    {
        return $this->belongsToMany(Reglementcl::class);
    }

 public function lignedocument()
{
    return $this->hasMany(Lignedocument::class);
}

 public function document()
{
    return $this->belongsTo(Document::class);
}

    public function typeDocument(){	

	switch ($this->type) {
		case 1:
        	return $this->hasOne(Devi::class);			
			break;
		case 2:
        	return $this->hasOne(Proforma::class);		 
			break;
		case 3:
        	return $this->hasOne(Brfournisseur::class);		 
			break;
		case 4:
        	return $this->hasOne(Brclient::class);		 
			break; 

		case 5:
            return $this->hasOne(Befournisseur::class);		 
			break; 
		case 6:
            return $this->hasOne(Bcfournisseur::class);	 
			break; 
		case 7:
        	 return $this->hasOne(Blclient::class);	 
			break; 
        case 8:
        	  return $this->hasOne(Bcclient::class); 
			break; 
		
		case 9:
        	 return $this->hasOne(Factavoirclient::class);
			break; 
		case 10:
        	 return $this->hasOne(Factureclient::class);
			break; 
		case 11:
        	 return $this->hasOne(Factavoirfournisseur::class);
			break; 
		
		case 12:
		     return $this->hasOne(Facturefournisseur::class);

			default:
					return error;
					break;
			
				
				
			
	}}}

   
      
    
    