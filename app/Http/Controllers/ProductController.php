<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'p_name'=>'required',
            'p_brand'=>'required',
            'p_innersize'=>'required',
            'p_loosesize'=>'required',
            'p_casesize'=>'required',
        ]);

        $product = new Products();
        $product->p_name=$request->p_name;
        $product->p_brand=$request->p_brand;
        $product->p_innersize=$request->p_innersize;
        $product->p_loosesize=$request->p_loosesize;
        $product->p_casesize=$request->p_casesize;
        $product->save();
        return response()->json(["message"=>"Product has been added"]);

    }

    public function getProduct()
    {
        return Products::all();

    }

    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        Products::find($id)->delete();
        return "Deleted";

    }

    public function editProduct(Request $request)
    {
        $request->validate([
            'p_name'=>'required',
            'p_brand'=>'required',
            'p_innersize'=>'required',
            'p_loosesize'=>'required',
            'p_casesize'=>'required',

        ]);
        
        $product = Products::find($request->id);

        
        $product->p_name=$request->p_name;
        $product->p_brand=$request->p_brand;
        $product->p_innersize=$request->p_innersize;
        $product->p_loosesize=$request->p_loosesize;
        $product->p_casesize=$request->p_casesize;
        $product->save();
        return response()->json(["message"=>"Product has been added"]);

    }
}
