@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="{{route('invoice.save')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
                <label for="inputTitle">Name</label>
                <input type="text"name="name" class="form-control" id="inputTitle" placeholder="name">
            </div>
            <div class="form-group">
                <label for="inputTitle">Total</label>
                <input type="text"name="total" class="form-control" id="inputTitle" placeholder="Total amount">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <div class="col-md-4"></div>

</div>
@endsection