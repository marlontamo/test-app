@extends('layouts.app')

@section('content')
<a href="/Customer" class="btn btn-success">Back to List</a>
<div class="row">
    
    <h1>Customer Profile ID Number:{{$customer->id}}</h1>
    <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">Fullname: {{$customer->last_name}},{{$customer->first_name}}</h4>
      <p class="card-text">Email:{{$customer->email}}</p>
      <p class="card-text">Position:{{$customer->company}}</p>
     
      <a href="/customer-edit/{{$customer->id}}" class="btn btn-warning btn-xs">Edit</a>
     
    </div>
  </div>
</div>

@endsection