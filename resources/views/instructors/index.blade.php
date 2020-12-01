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
    <a href="{{url('instructors/create')}}" class="btn btn-primary">
        Add New Instructor
    </a>
</div>

<h1>Instructors</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Expertise</th>
    </thead>
    <tbody>
        @foreach($instructors as $i)

        <tr>
            <td>{{$i->id}}</td>
            <td>{{$i->user->lname}}</td>
            <td>{{$i->user->fname}}</td>
            <td>{{$i->aoe}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
