@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="/customer-update" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <input type="hidden" name="id" value="{{$customer->id}}">
                <label for="inputfirstname">Firstname</label>
                <input type="text" name="first_name" class="form-control" id="inputfirstname" value="{{$customer->first_name}}">
            </div>
            <div class="form-group">
                <label for="inputlastname">Lastname</label>
                <input type="text" name="last_name" class="form-control" id="inputlastname" value="{{$customer->last_name}}">
            
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->email}}">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputTitle">Company</label>
                <input type="text"name="company" class="form-control" id="inputTitle" value="{{$customer->company}}">
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
    <div class="col-md-4"></div>

</div>


@endsection