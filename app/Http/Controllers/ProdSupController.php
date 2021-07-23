<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdSup;

class ProdSupController extends Controller
{
    public function getProdSup()
    {
        $prodSup = ProdSup::with('product','supplier')->get();
        return $prodSup;
    }


    public function addProdSup(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required',
            'product_id' => 'required'
        ]);

        $prodSup = new ProdSup();

        $prodSup->supplier_id = $request->supplier_id;
        $prodSup->product_id = $request->product_id;
        $prodSup->save();
        return response()->json(["message"=>"Added Successfully!"]);
    }


    public function deleteProdSup(Request $request)
    {
        $id=$request->id;
        ProdSup::find($id)->delete();
        return "deleted!";
    }

    public function editProdSup(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required',
            'product_id' => 'required'
        ]);

        $prodSup = ProdSup::find($request->id);

        $prodSup->supplier_id = $request->supplier_id;
        $prodSup->product_id = $request->product_id;
        $prodSup->save();
        return response()->json(["message"=>"Edited Successfully!"]);
    }
}
