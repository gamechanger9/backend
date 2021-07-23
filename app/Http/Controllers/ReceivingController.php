<?php

namespace App\Http\Controllers;

use App\Models\Receiving;
use Illuminate\Http\Request;

class ReceivingController extends Controller
{
    public function getReceiving()
    {
        $receiving = Receiving::with('product','location','purchaseOrder')->get();

        return $receiving;
    }

    public function addReceiving(Request $request)
    {
        $request->validate([
            'location_id' => 'required',
            'product_id' => 'required',
            'purchase_order_id' => 'required',
            'date' => 'required',
            'mfg_date' => 'required'

        ]);

        $receiving = new Receiving();

        $receiving->product_id = $request->product_id;
        $receiving->location_id = $request->location_id;
        $receiving->purchase_order_id = $request->purchase_order_id;
        $receiving->date = $request->date;
        $receiving->mfg_date = $request->mfg_date;
        $receiving->save();

        return response()->json(["message"=>"Added Successfully!"]);

    }

    public function deleteReceiving(Request $request)
    {
        $id = $request->id;
        Receiving::find($id)->delete();
        return "deleted!";

    }

    public function editReceiving(Request $request)
    {
        
        $request->validate([
            'location_id' => 'required',
            'product_id' => 'required',
            'purchase_order_id' => 'required',
            'date' => 'required',
            'mfg_date' => 'required'

        ]);

        $receiving = Receiving::find($request->id);

        $receiving->product_id = $request->product_id;
        $receiving->location_id = $request->location_id;
        $receiving->purchase_order_id = $request->purchase_order_id;
        $receiving->date = $request->date;
        $receiving->mfg_date = $request->mfg_date;
        $receiving->save();

        return response()->json(["message"=>"Edited Successfully!"]);
    }
}
