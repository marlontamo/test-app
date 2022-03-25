<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {    $customers = Customer::all();
         return view('Customer.index',compact('customers'));
        //return view('Employees.index',compact('employees'));
    }
    public function show($id)
    {   
        $customer = Customer::findOrFail($id);
        return view('Customer.show',compact('customer'));
       
    }
    public function create()
    {
        return view('Customer.create');
       
    }
    public function save(Request $request)
    {
         $customer = new Customer();
         $customer->first_name = $request->first_name;
         $customer->last_name = $request->last_name;
         $customer->email = $request->email;
         $customer->company =$request->company;
         $customer->save();
        return redirect('/Customer');
    }
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
         return view('Customer.edit',compact('customer'));
        
    }
    public function update(Request $request)
    {
         //return dd($request->id);
         $customer = Customer::findOrFail($request->id);
         $customer->first_name = $request->first_name;
         $customer->last_name = $request->last_name;
         $customer->email = $request->email;
         $customer->company =$request->company;
         $customer->save();
         
         return redirect('/customer-show/'.$request->id);
    }
}