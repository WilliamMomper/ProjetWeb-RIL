<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    protected $fillable = ['agence_nom','agence_adresse','agence_telephone','agence_fax','agence_photo'];

    public function Vehicule()
	{
		return $this->hasMany('App\Models\Vehicule');
	} 

	public function Agent()
	{
		return $this->hasMany('App\Models\Agent');
	} 

}