<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;
class PurchaseOrderController extends Controller
{
    public function getPurchaseOrder()
    {
        $pOrder=PurchaseOrder::with('supplier','product')->get();

        return $pOrder;

        return "successful!";

    }

    public function addPurchaseOrder(Request $request)
    {
        $request->validate([
            
            'supplier_id' => 'required',
            'product_id' => 'required',
            'date' => 'required',
            'price' => 'required',
            'quantity' => 'required'

        ]);

        $purchaseOrder = new PurchaseOrder();

        $purchaseOrder->supplier_id = $request->supplier_id;
        $purchaseOrder->product_id = $request->product_id;
        $purchaseOrder->date = $request->date;
        $purchaseOrder->price = $request->price;
        $purchaseOrder->quantity = $request->quantity;
        $purchaseOrder->save();
        
        return response()->json(["message"=>"Added Successfully!"]);
       
    }

    public function deletePurchaseOrder(Request $request){
        $id=$request->id;
        PurchaseOrder::find($id)->delete();
        return "deleted!";

    }

    public function editPurchaseOrder(Request $request)
    {
        $request->validate([
            
            'supplier_id' => 'required',
            'product_id' => 'required',
            'date' => 'required',
            'price' => 'required',
            'quantity' => 'required'

        ]);

        $purchaseOrder = PurchaseOrder::find($request->id);

        $purchaseOrder->supplier_id = $request->supplier_id;
        $purchaseOrder->product_id = $request->product_id;
        $purchaseOrder->date = $request->date;
        $purchaseOrder->price = $request->price;
        $purchaseOrder->quantity = $request->quantity;
        $purchaseOrder->save();
        
        return response()->json(["message"=>"Edit Successfully!"]);
    }
}
