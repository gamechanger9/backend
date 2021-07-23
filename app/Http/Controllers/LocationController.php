<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;

class LocationController extends Controller
{
    public function addLocation(Request $request)
    {
        $request->validate([
            'l_name'=>'required',
            'l_city'=>'required',
            'l_type'=>'required'
        ]);

        $location = new Locations();
        $location->l_name = $request->l_name;
        $location->l_city = $request->l_city;
        $location->l_type = $request->l_type;
        $location->save();

        return response()->json(["message"=>"Supplier has been added"]);
    }

    public function getLocation()
    {
        return Locations::all();
    }

    public function deleteLocation(Request $request)
    {
        $id=$request->id;
        Locations::find($id)->delete();
        return "deleted";
    }

    public function editLocation(Request $request)
    {
        $request->validate([
            'l_name'=>'required',
            'l_city'=>'required',
            'l_type'=>'required'
        ]);

        $location = Locations::find($request->id);

        
        $location->l_name = $request->l_name;
        $location->l_city = $request->l_city;
        $location->l_type = $request->l_type;
        $location->save();

        return response()->json(["message"=>"Supplier has been added"]);        
    }
}
