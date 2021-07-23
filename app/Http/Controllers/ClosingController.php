<?php

namespace App\Http\Controllers;

use App\Models\Closing;
use Illuminate\Http\Request;

class ClosingController extends Controller
{
    public function getClosing()
    {
        $closing = Closing::with('receiving')->get();
        return $closing;

    }


    public function addClosing(Request $request)
    {
        $request->validate([
            'receiving_id' => 'required',
            'location_id' => 'required'

        ]);

        $closing = new Closing();

        $closing->receiving_id = $request->receiving_id;
        $closing->location_id = $request->location_id;
        $closing->save();
        return response()->json(["message"=>"Added Successfully!"]);
       
    }

    public function deleteClosing(Request $request)
    {
        $id = $request->id;
        Closing::find($id)->delete();
        return "deleted!";
    }

    public function editClosing(Request $request)
    {

        $request->validate([
            'receiving_id' => 'required',
            'location_id' => 'required'
        ]);

        $closing = Closing::find($request->id);

        $closing->receiving_id = $request->receiving_id;
        $closing->location_id = $request->location_id;
        $closing->save();
        return response()->json(["message"=>"Edited Successfully!"]);
       
    }
}
