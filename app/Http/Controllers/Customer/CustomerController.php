<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
         return view('Customer.index');
        //return view('Employees.index',compact('employees'));
    }
    public function show()
    {
        return view('Customer.show');
        //return view('Employees.show',compact('employee'));
    }
    public function create()
    {
        return view('Customer.create');
        //return view('Employees.create');
    }
    public function save(Request $request)
    {
         
        return redirect('/employee');
    }
    public function edit()
    {
        
         return view('Customer.edit');
         //return view('Employees.edit',compact('employee'));
    }
    public function update(Request $request)
    {
     
        
         
         return redirect('/employee/'.$request->id);
    }
}