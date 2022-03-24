<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   public function index(){
       return view('Employees.index');
   }
   public function show($id){
       $index = $id;
       return view('Employees.show',compact('index'));
   }
}
