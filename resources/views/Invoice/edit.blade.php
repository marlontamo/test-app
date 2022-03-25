@extends('layouts.app')

@section('content')
<div class="row">
   <h1>Edit Invoice Details</h1>
   <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="/invoice-update" method="post">
        {{ csrf_field() }}
               <input type="hidden" name="id" value="{{$invoice->id}}"/>
        <div class="form-group">
                <label for="inputTitle">Name</label>
                <input type="text"name="name" class="form-control" id="inputTitle" value="{{$invoice->name}}">
            </div>
            <div class="form-group">
                <label for="inputTitle">Total</label>
                <input type="text"name="total" class="form-control" id="inputTitle" value="{{$invoice->total}}">
            </div>
            <button type="submit" class="btn btn-primary">Update Invoice</button>
        </form>
    </div>
    <div class="col-md-4"></div>

</div>
</div>

@endsection