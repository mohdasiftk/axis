<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SqlController extends Controller
{
    public function addInvoice(Request $request )
    {
        Sale::create([
            'invoice_number' => $request->inv_id,
            'product_name' => $request->product_name,
            'quantity' => $request->qty,
            'customer_id' => $request->customer_id,
        ]);
        return redirect()->route('invoice')->with('message','Invoice added successfully..!');
    }
    public function updateInvoice(Request $request)
    {
        $invoice = Sale::find($request->id);
        $invoice->update([
            'product_name' => $request->product_name,
            'quantity' => $request->qty,
            'customer_id' => $request->customer_id,
        ]);
        return redirect()->route('invoice')->with('message','Invoice updated successfully..!');
    }
    public function deleteInvoice($id)
    {
        $invoice = Sale::find($id)->delete();
        return back()->with('message','Invoice deleted successfully..!');
    }
}
