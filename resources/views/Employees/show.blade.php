@extends('layouts.app')

@section('content')
<a href="/employee" class="btn-success">Back to List</a>
<div class="row">
    
    <h1>Employee Profile ID Number:{{$employee->id}}</h1>
    <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">{{$employee->last_name}},{{$employee->first_name}}</h4>
      <p class="card-text">Email:{{$employee->email}}</p>
      <p class="card-text">Position:{{$employee->title}}</p>
      <p class="card-text">Country: {{$employee->country}}</p>
     
    </div>
  </div>
</div>

@endsection