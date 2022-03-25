@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Customer List:</h1>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <a href="/cust-create" class="btn btn-primary">Add new Customer</a>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <ul class="list-group">
        @forelse ($customers as $customer)
            <li class="list-group-item"><a href="/customer-show/{{$customer->id}}"><h5>{{ $customer->last_name }},{{$customer->first_name}}</h5></a></li>
        @empty

            <p>No users</p>
        @endforelse
</ul>

    </div>
    <div class="col-md-4"></div>
</div>
    
    
</div>

@endsection