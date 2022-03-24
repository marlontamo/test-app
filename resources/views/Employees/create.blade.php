@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="{{route('employee.save')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="inputfirstname">Firstname</label>
                <input type="text" name="first_name" class="form-control" id="inputfirstname" placeholder="Firstname">
            </div>
            <div class="form-group">
                <label for="inputlastname">Lastname</label>
                <input type="text" name="last_name" class="form-control" id="inputlastname" placeholder="Lastname">
            
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text"name="title" class="form-control" id="inputTitle" placeholder="Title/Position">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <div class="col-md-4"></div>

</div>

@endsection