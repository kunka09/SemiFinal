@extends('base')

@section('content')
    <h1>Create New User</h1>

    {!! Form::open(['url'=>'/users', 'method'=>'post']) !!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">

                    {{Form::label('lname','Last Name')}}
                    {{Form::text('lname',null,['class'=>'form-control'])}}

                </div>

                <div class="form-group">

                    {{Form::label('fname','First Name')}}
                    {{Form::text('fname',null,['class'=>'form-control'])}}

                </div>

                <div class="form-group">

                    {{Form::label('email','Email')}}
                    {{Form::text('email',null,['class'=>'form-control'])}}

                </div>

                <div class="form-group">

                    {{Form::label('password')}}
                    {{Form::password('password',['class'=>'form-control'])}}

                </div>

                <div class="form-group">
                    <button class="class btn btn-primary float-left">
                        Create User
                    </button>
                </div>

        </div>
    {!! Form::close() !!}
        <div class="col-md-7">
            @if(count($errors)>0)

                <div class="card">
                    <div class="card-body bg-danger text-warning">
                            The field is Empty. Please put the following requirements:
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
</div>

@endsection
