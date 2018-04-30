<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Auth;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return view('pages.locations.manageLocation',array(
            'locations' => $locations
        ));
    }

    public function create()
    {
        return view('pages.locations.createLocation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required',
        ]);

        $location = new Location;
        $location->location_name = $request->location_name;

        $location->save();

        return redirect('location')->with('message','Successfully Created Location');
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);

        return view('pages.locations.editLocation',array(
            'location' => $location
        ));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'location_name' => 'required',
        ]);
        
        $location = Location::findOrFail($id);

        $location->location_name = $request->location_name;

        $location->save();

        return redirect('location')->with('message','Successfully Edited Location');
    }

    public function destroy($id)
    {
        $location = Location::find($id);

        $location->delete();

        return redirect('location')->with('message','Successfully Deleted Location');
    }
}
