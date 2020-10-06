<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    // all agents
    public function index()
    {
        $agent = Agent::all()->toArray();
        return array_reverse($agent);
    }

    // add agent
    public function add(Request $request)
    {
        $agent = new Agent([
            'agent_nom'=> $request->input('agent_nom'),
            'agent_prenom'=> $request->input('agent_prenom'),
            'agent_telephone'=> $request->input('agent_telephone'),
            'agent_fax'=> $request->input('agent_fax'),
            'agent_mobile'=> $request->input('agent_mobile'),
            'agent_user'=> $request->input('agent_user'),
            'agent_password'=> $request->input('agent_password'),
        ]);
        $agent->save();

        return response()->json('The agent successfully added');
    }

    // edit agent
    public function edit($id)
    {
        $agent = Agent::find($id);
        return response()->json($agent);
    }

    // update agent
    public function update($id, Request $request)
    {
        $agent = Agent::find($id);
        $agent->update($request->all());

        return response()->json('The agent successfully updated');
    }

    // delete agent
    public function delete($id)
    {
        $agent = Agent::find($id);
        $agent->delete();

        return response()->json('The agent successfully deleted');
    }
}