<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function addSupplier(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'address'=>'required'
        ]);

        $supplier= new Supplier();
        $supplier->name=$request->name;
        $supplier->email=$request->email;
        $supplier->address=$request->address;
        $supplier->contact=$request->contact;
        $supplier->save();
        return response()->json(["message"=>"Supplier has been added"]);

    }

    public function getSupplier()
    {
        return Supplier::all();
    }

    public function deleteSupplier(Request $request)
    {
        
        $id=$request->id;
        Supplier::find($id)->delete();
        return "DEleted";
    }

    public function editSupplier(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'address'=>'required'
        ]);

        $supplier= Supplier::find($request->id);

        $supplier->name=$request->name;
        $supplier->email=$request->email;
        $supplier->address=$request->address;
        $supplier->contact=$request->contact;
        $supplier->save();
        return response()->json(["message"=>"Supplier has been updated"]);

    }


}
