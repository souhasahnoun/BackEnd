<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglementcl extends Model
{
     protected $fillable = ['date', 'mode','num','etat','montant','type_pay','client','banque','date_echeance','etat_ch','etat_traite','type_date','type_traite','solder','non_solder','impression','banque_id'];

     public function typereglementscls(){	

	switch ($this->mode) {

		case 'chequue cadeau':
     return $this->hasOne(Chequecadeaucls::class);	
			break;
		case 'virement':
        return $this->hasOne(Virementcls::class); 
			break;
		case 'espace':
        return $this->hasOne(Espececls::class);	 
			break;
		case 'cheque':
         return $this->hasOne(Chequecls::class); 
			break; 

		case 'traite':
          return $this->hasOne(Traitecls::class);
			break; 

			case 'TPE':
          return $this->hasOne(Tpecls::class);
			break; 
		

			default:
					return error;
					break;
			
				
				
			
	}}


    public function documents()
    {
        return $this->belongsToMany(Document::class);
    }
     public function banque()
{
    return $this->belongsTo(Banque::class);
}
 public function lignebordereau()
{
    return $this->hasMany(Lignebordereau::class);
}
public function rscls()
{
	return $this->hasMany(Rscl::class);
}
}
