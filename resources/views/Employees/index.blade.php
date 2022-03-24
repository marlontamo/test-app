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
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <ul class="list-group">
        @forelse ($employees as $employee)
            <li class="list-group-item"><a href="/employee/{{$employee->id}}"><h5>{{ $employee->first_name }}</h5></a></li>
        @empty

            <p>No users</p>
        @endforelse
</ul>

    </div>
    <div class="col-md-4"></div>
</div>

@endsection