@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <a href="{{route('employee.create')}}" class="btn btn-primary">Add new Employee</a>
    </div>
    <div class="col-md-4"></div>
   
</div>
<div class="row">
    <h1>Employee List:</h1>
</div>

@endsection