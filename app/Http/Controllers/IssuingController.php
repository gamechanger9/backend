<?php

namespace App\Http\Controllers;

use App\Models\Issuing;
use Illuminate\Http\Request;

class IssuingController extends Controller
{
    public function getIssuing()
    {
        $issuing = Issuing::with('receiving','location')->get();

        return $issuing;
    }

    public function addIssuing(Request $request)
    {
        $request->validate([
            'receiving_id' => 'required',
            'location_id' => 'required',
            'inLocation' => 'required',
            'outLocation' => 'required'

        ]);

        $issuing = new Issuing();
        $issuing->receiving_id = $request->receiving_id;
        $issuing->location_id = $request->location_id;
        $issuing->inLocation = $request->inLocation;
        $issuing->outLocation = $request->outLocation;

        return response()->json(["message"=>"Added Successfully!"]);

    }

    public function deleteIssuing(Request $request)
    {
        $id = $request->id;
        Issuing::find($id)->delete();
        return "deleted!";
    }

    public function editIssuing(Request $request)
    {
        $request->validate([
            'receiving_id' => 'required',
            'location_id' => 'required',
            'inLocation' => 'required',
            'outLocation' => 'required'

        ]);

        $issuing = Issuing::find($request->id);

        $issuing->receiving_id = $request->receiving_id;
        $issuing->location_id = $request->location_id;
        $issuing->inLocation = $request->inLocation;
        $issuing->outLocation = $request->outLocation;

        return response()->json(["message"=>"Edited Successfully!"]);
    }
}
