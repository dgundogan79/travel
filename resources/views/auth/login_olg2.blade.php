<!-- -->
@extends('layouts.master')

@section('content')
<div class="col-md-8 col-md-offset-2 form-content">
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{!!$error!!}</p>
    @endforeach
    <hr>	
    <h2 class="intro-text text-center">{{ trans('front/login.login') }}</h2>
    <hr>
    <p>{{ trans('front/login.text') }}</p>	

    {!!Form::open(['url'=>'auth/login','class'=>'form form-horizontal','style'=>'margin-top:50px'])!!}
    <div class="form-group">
        {!! Form::label('email','Email:',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
            {!! Form::text('email',Input::old('email'),['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:',['class'=>'col-sm-3 control-label']) !!}
        <div class="col-sm-8">
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="text-center">
        {!!Form::submit('Login',['class'=>'btn btn-default'])!!}
    </div>
    {!!Form::close()!!}
</div>

@stop