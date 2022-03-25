@extends('layouts.app')

@section('content')
<div class="row">
    <h1>Invoice List:</h1>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <a href="/invoice-create" class="btn btn-primary">Add new Invoice</a>
    </div>
    <div class="col-md-4"></div>
</div>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <ul class="list-group">
        @forelse ($invoices as $invoice)
            <li class="list-group-item"><a href="/invoice/{{$invoice->id}}"><h5>Invoice no:</h5><h3>{{ $invoice->id }}</h3><br/><h5>invoice name:<h5><h3>{{$invoice->name}}</h3></a></li>
        @empty

            <p>No users</p>
        @endforelse
</ul>

    </div>
    <div class="col-md-4"></div>
</div>
</div>

@endsection