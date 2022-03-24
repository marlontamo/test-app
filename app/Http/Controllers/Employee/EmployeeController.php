<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index(){
       $employees = Employee::all();
       return view('Employees.index',compact('employees'));
   }
   public function show($id){
       $employee = Employee::findOrFail($id);
       return view('Employees.show',compact('employee'));
   }
   public function create(){
    
       return view('Employees.create');
   }
   public function save(Request $request){
         $employee = new Employee();
         $employee->first_name = $request->first_name;
         $employee->last_name = $request->last_name;
         $employee->email =$request->email;
         $employee->title = $request->title;
         $employee->country= $request->country;
         $employee->save();
       return redirect('/employee');
   }
}
