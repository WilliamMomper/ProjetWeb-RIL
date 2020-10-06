<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoriqueVehicule extends Model
{
    protected $fillable = ['id_vehicule','	date_retour,','	date_pret','agent'];

    public function Vehicule()
	{
		return $this->hasOne('App\Models\Vehicule');
	} 

	public function Agent()
	{
		return $this->hasOne('App\Models\Agent');
	} 

}