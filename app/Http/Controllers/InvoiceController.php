<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getInvoice()
    {
        $invoice = Invoice::with('receiving')->get();

        return $invoice;
    }

    public function addInvoice(Request $request)
    {
        $request->validate([
            'receiving_id' => 'required',
            'rate' => 'required',
            'tax' => 'required',
            'amount' => 'required'
        ]);

        $invoice = new Invoice();

        $invoice->receiving_id = $request->receiving_id;
        $invoice->rate = $request->rate;
        $invoice->tax = $request->tax;
        $invoice->amount = $request->amount;
        $invoice->save();

        return response()->json(["message"=>"Added Successfully!"]);
    }

    public function deleteInvoice(Request $request)
    {
        $id = $request->id;
        Invoice::find($id)->delete();

    }

    public function editInvoice(Request $request)
    {
        $request->validate([
            'receiving_id' => 'required',
            'rate' => 'required',
            'tax' => 'required',
            'amount' => 'required'
        ]);

        $invoice = Invoice::find($request->id);

        $invoice->receiving_id = $request->receiving_id;
        $invoice->rate = $request->rate;
        $invoice->tax = $request->tax;
        $invoice->amount = $request->amount;
        $invoice->save();

        return response()->json(["message"=>"Edited Successfully!"]);
    }
}
