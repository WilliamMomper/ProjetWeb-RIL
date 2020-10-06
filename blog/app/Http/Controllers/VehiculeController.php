<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vehicule;

class VehiculeController extends Controller
{
    // all vehicules
    public function index()
    {
        $vehicules = Vehicule::all()->toArray();
        return array_reverse($vehicules);
    }

    // add vehicule
    public function add(Request $request)
    {
        $vehicule = new Vehicule([
            'vehicule_modele'=> $request->input('vehicule_modele'),
            'vehicule_prix'=> $request->input('vehicule_prix'),
            'vehicule_dateFab'=> $request->input('vehicule_dateFab'),
            'vehicule_hauteur'=> $request->input('vehicule_hauteur'),
            'vehicule_largeur'=> $request->input('vehicule_largeur'),
            'vehicule_poids'=> $request->input('vehicule_poids'),
            'vehicule_puissance'=> $request->input('vehicule_puissance'),
            'vehicule_photos'=> $request->input('vehicule_photos'),
            'vehicule_lieux'=> $request->input('vehicule_lieux'),
            'vehicule_status'=> $request->input('vehicule_status'),
            'vehicule_agent'=> $request->input('vehicule_agent'),
            'vehicule_agence'=> $request->input('vehicule_agence'),
            'vehicule_user'=> $request->input('vehicule_user')
        ]);
        $vehicule->save();

        return response()->json('The vehicule successfully added');
    }

    // edit vehicule
    public function edit($id)
    {
        $vehicule = Vehicule::find($id);
        return response()->json($vehicule);
    }

    // update vehicule
    public function update($id, Request $request)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->update($request->all());

        return response()->json('The vehicule successfully updated');
    }

    // delete vehicule
    public function delete($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();

        return response()->json('The vehicule successfully deleted');
    }
}