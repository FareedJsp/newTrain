<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $city = City::get();
        return view('city.index', compact('city'));
    }

    public function indextwo()
    {
        $city2 = City::get();
        return view('city.data', compact('city2'));
    }

    //dynamic input

    public function create(){

        $data['countries'] = Country::get(["name", "id"]);
        return view('city.create', $data);

    }

    //end dynamic input

    // public function create()
    // {
    //     $city = City::get();
    //     return view('city.create');
    // }

    public function store(Request $request)
    {
        $data = new City;

        $data -> name = $request->name;
        $data -> state_id = $request->state_id;
        $data->save();

        return redirect()->route ('city')->with('success', 'City has been Added successfully.');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('city.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $data = City::findOrFail($id);

        $data -> name = $request->name;
        $data -> state_id = $request->state_id;

        $data->save();

        return redirect()->route ('city')->with('success', 'city has been edited successfully.');
    }

    public function destroy($id)
    {
        $data = City::find($id);
        $data->delete();

        return redirect()->route ('state')->with('success', 'City has been deleted successfully.');
    }
}
