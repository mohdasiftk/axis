<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function invoice()
    {
        $invoices = Sale::all();
        return view('invoice',compact('invoices'));
    }
    public function createInvoice()
    {
        $latest = Sale::latest()->first();

        if (! $latest) {
            $invno = 'INV-001';
        }else{
            $string = preg_replace("/[^0-9\.]/", '', $latest->invoice_number);

            $invno =  'INV-' . sprintf('%03d', $string+1);
        }

        $products = Product::all();
        $customers = Customer::all();
        return view('create_invoice',compact('products','customers','invno'));
    }
    public function editInvoice($id)
    {
        $invoices = Sale::find($id);
        $products = Product::all();
        $customers = Customer::all();
        return view('edit_invoice',compact('products','customers','invoices'));

    }
    public function customerSales()
    {
        $customers = Customer::all();
        return view('customer_sales',compact('customers'));
    }
    public function itemSales()
    {
        $products = Product::all();
        return view('item_sales',compact('products'));
    }
    public function allSales()
    {
        $invoices = Sale::all();
        return view('all_sales',compact('invoices'));
    }
    public function noSales()
    {
        $customers = Customer::all();
        return view('no_sales',compact('customers'));
    }
}
