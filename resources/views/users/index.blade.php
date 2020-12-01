@extends('base')

@section('content')

@if($info = Session::get('info'))
<div class="alert">
    <div class="alert bg-success text-white">
        {{$info}}
    </div>
</div>

@endif

<div class="float-right">
    <a href="{{url('users/create')}}" class="btn btn-primary">
        Add New User
    </a>
</div>
<h1>List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
