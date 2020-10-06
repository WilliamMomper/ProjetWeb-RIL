<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatutVehicule extends Model
{
    protected $fillable = ['Nom'];

    public function Vehicule()
	{
		return $this->hasOne('App\Models\Vehicule');
	} 

}