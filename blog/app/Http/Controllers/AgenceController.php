<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agence;

class AgenceController extends Controller
{
    // all agences
    public function index()
    {
        $agences = Agence::all()->toArray();
        return array_reverse($agences);
    }

    // add agence
    public function add(Request $request)
    {
        $agence = new Agence([
            'agence_nom'=> $request->input('agence_nom'),
            'agence_adresse'=> $request->input('agence_adresse'),
            'agence_telephone'=> $request->input('agence_telephone'),
            'agence_fax'=> $request->input('agence_fax'),
            'agence_photo'=> $request->input('agence_photo')
        ]);
        $agence->save();

        return response()->json('The agence successfully added');
    }

    // edit agence
    public function edit($id)
    {
        $agence = Agence::find($id);
        return response()->json($agence);
    }

    // update agence
    public function update($id, Request $request)
    {
        $agence = Agence::find($id);
        $agence->update($request->all());

        return response()->json('The agence successfully updated');
    }

    // delete agence
    public function delete($id)
    {
        $agence = Agence::find($id);
        $agence->delete();

        return response()->json('The agence successfully deleted');
    }
}