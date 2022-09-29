<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $country = Country::get();
        return view('country.index', compact('country'));
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request)
    {
        $data = new Country;

        $data -> name = $request->name;
        $data -> sortname = $request->sortname;
        $data -> phonecode = $request->phonecode;
        $data->save();

        return redirect()->route ('country')->with('success', 'Country has been Added successfully.');
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $data = Country::findOrFail($id);

        $data -> name = $request->name;
        $data -> sortname = $request->sortname;
        $data -> phonecode = $request->phonecode;

        $data->save();

        return redirect()->route ('country')->with('success', 'Country has been edited successfully.');
    }

    public function destroy($id)
    {
        $data = Country::find($id);
        $data->delete();

        return redirect()->route ('country')->with('success', 'Country has been deleted successfully.');
    }
}
