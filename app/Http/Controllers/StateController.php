<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $state = State::get();
        return view('state.index', compact('state'));
    }

    public function indextwo()
    {
        $state2 = State::get();
        return view('state.data', compact('state2'));
    }

    public function create()
    {
        return view('state.create');
    }

    public function store(Request $request)
    {
        $data = new State;

        $data -> name = $request->name;
        $data -> country_id = $request->country_id;
        $data->save();

        return redirect()->route ('state')->with('success', 'State has been added successfully.');
    }

    public function edit($id)
    {
        $state = State::findOrFail($id);
        return view('state.edit', compact('state'));
    }

    public function update(Request $request, $id)
    {
        $data = State::findOrFail($id);

        $data -> name = $request->name;
        $data -> country_id = $request->country_id;

        $data->save();

        return redirect()->route ('state')->with('success', 'State has been edited successfully.');
    }

    public function destroy($id)
    {
        $data = State::find($id);
        $data->delete();

        return redirect()->route ('state')->with('success', 'State has been deleted successfully.');
    }

    public function show($id)
    {
        $id = $id;

        $state = City::find($id);
        return view('state.showcity', compact('state'));
    }

}
