<?php

namespace App\Http\Controllers\Employee;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index(){
       return Employee::all();
       return view('Employees.index');
   }
   public function show($id){
       $index = $id;
       return view('Employees.show',compact('index'));
   }
   public function create(){
    
       return view('Employees.create');
   }
   public function save(Request $request){
       //this function is working
       //cal the model then save data
       return dd($request->all());
   }
}
