<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiementfr extends Model
{
    protected $fillable = ['date', 'mode','num','etat','montant','fournisseur','banque','num_fact','date_echeance','etat_ch','etat_traite','type_date','type_ch','type_traite','solder','non_solder','impression','ordrepaiement_id','banque_id'];


 public function typepaiementfrs(){	

	switch ($this->mode) {
		
		case 'cheque cadeau':
        return $this->hasOne(Chequecadeaufs::class);		
			break;
		case 'virement':
        	 return $this->hasOne(Virementfs::class);	 
			break;
		case 'espece':
          return $this->hasOne(Especefs::class);	 
			break;
		case 'cheque':
         return $this->hasOne(Chequefs::class);	 
			break; 

		case 'traite':
                return $this->hasOne(Traitef::class); 
			break; 

			case 'TPE':
                return $this->hasOne(Tpefs::class); 
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
public function rsfrs()
{
	return $this->hasMany(Rsfr::class);
}
}
