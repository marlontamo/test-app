@extends('layouts.app')

@section('content')
<div class="row">
<a href="/Invoice" class="btn btn-success">Back to List</a>
<div class="row">
    
    <h1>Employee Profile ID Number:{{$invoice->id}}</h1>
    <div class="card" style="width:400px">
    <div class="card-body">
      <h4 class="card-title">name: {{$invoice->name}}</h4>
      <p class="card-text">Date:{{$invoice->created_at}},{{$invoice->updated_at}}</p>
      <p class="card-text">Total:${{$invoice->total}}</p>
      <a href="/invoice-edit/{{$invoice->id}}" class="btn btn-warning btn-xs">Edit</a>
     
    </div>
  </div>
</div>
</div>

@endsection