@extends('dashboard')

@section('subcontent')

{!!Form::open(['url'=>'profile/edit','class'=>'form-horizontal','files'=>true])!!}
<br/>
{!! Form::select('country_id', $countries ,$profile->country_id,['class'=>'form-control','placeholder'=>trans('front/login.email')])  !!}
<br/>

{!! Form::file('image',['class'=>'form-control']) !!}
<br/>
<p class="errors">{!!$errors->first('image')!!}</p>
@if(Session::has('error'))
<p class="errors">{!! Session::get('error') !!}</p>
@endif
{!!Form::submit('Update',['class'=>'btn btn-info btn-sm pull-right'])!!}
{!!Form::close()!!}


@stop