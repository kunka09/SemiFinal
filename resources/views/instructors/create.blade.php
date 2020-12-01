@extends('base')

@section('content')
    <h1>Create New Instructor</h1>

    <div class="row">
        <div class="col-md-4">
            {!! Form::open(['url'=>'/instructors', 'method'=>'post']) !!}
                <div class="form-group">
                    {{Form::label('user_id','Select User')}}
                    {{Form::select('user_id', \App\User::list(), null, ['class'=>'form-control',
                    'placeholder'=>'Select user'])}}
                </div>

                <div class="form-group">
                    {{Form::label('aoe','Expertise')}}
                    {{Form::text('aoe',null, ['class'=>'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label('rating','Rating')}}
                    {{Form::select('rating',[
                       '1' => 1,
                       '2' => 2,
                       '3' => 3,
                       '4' => 4,
                       '5' => 5,
                    ],null, ['class'=>'form-control'])}}
                </div>

                <div class="form-group">
                    <button class="class btn btn-primary float-left">
                        Create New Instructor
                    </button>
                </div>

            {!! Form::close() !!}
        </div>
        <div class="col-md-5">
            @include('errors')
        </div>
    </div>
@endsection
