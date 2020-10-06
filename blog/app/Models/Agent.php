<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['agent_nom','agent_prenom','agent_telephone','agent_fax','agent_mobile','agent_user','agent_password'];

    public function Vehicule()
	{
		return $this->hasOne('App\Models\Vehicule');
	} 

	public function Agence()
	{
		return $this->hasOne('App\Models\Agence');
	} 

}