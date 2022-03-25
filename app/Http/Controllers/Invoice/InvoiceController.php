<?php

namespace App\Http\Controllers\Invoice;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {    $invoices = Invoice::all();
         return view('Invoice.index',compact('invoices'));
       
    }
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('Invoice.show',compact('invoice'));
       
    }
    public function create()
    {
        return view('Invoice.create');
      
    }
    public function save(Request $request)
    {
         $invoice = new Invoice();
         $invoice->name = $request->name;
         $invoice->total = $request->total;
         $invoice->save();
        return redirect('/Invoice');
    }
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id); 
         return view('Invoice.edit',compact('invoice'));
        
    }
    public function update(Request $request)
    {
     
         $invoice = Invoice::findOrFail($request->id);
         $invoice->name = $request->name;
         $invoice->total = $request->total;
         $invoice->save();
          return redirect('/invoice/'.$request->id);
    }
}
