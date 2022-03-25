<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
         return view('Invoice.index');
        //return view('Employees.index',compact('employees'));
    }
    public function show()
    {
        return view('Invoice.show');
        //return view('Employees.show',compact('employee'));
    }
    public function create()
    {
        return view('Invoice.create');
        //return view('Employees.create');
    }
    public function save(Request $request)
    {
         
        return redirect('/employee');
    }
    public function edit()
    {
        
         return view('Invoice.edit');
         //return view('Employees.edit',compact('employee'));
    }
    public function update()
    {
     
        
         
         return redirect('/employee/'.$request->id);
    }
}
