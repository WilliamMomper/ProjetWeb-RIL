<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{
    protected $fillable = [
    	'vehicule_modele',
	    'vehicule_prix',
	    'vehicule_dateFab',
	    'vehicule_hauteur',
	    'vehicule_largeur',
	    'vehicule_poids',
	    'vehicule_puissance',
	    'vehicule_photos',
	    'vehicule_lieux',
	    'vehicule_status',
	    'vehicule_agent',
	    'vehicule_agence',
	    'vehicule_user'];


	public function Agence()
	{
		return $this->hasOne('App\Models\Agence');
	} 
	public function Agent()
	{
		return $this->hasOne('App\Models\Agent');
	} 
	public function StatutVehicule()
	{
		return $this->hasOne('App\Models\StatutVehicule');
	} 
	
}