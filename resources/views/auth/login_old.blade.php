<!-- -->
@extends('layouts.master')

@section('content')


<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

<body>
    <div class="middlePage">
        <div class="page-header">
            <h1 class="logo">TRAVEL <small>Welcome to travel site!</small></h1>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{!! trans('front/login.login') !!}</h3>
            </div>
            <div class="panel-body">

                <div class="row">

                    <div class="col-md-5" >
                        <a href="#">{!! HTML::image('img/fb.png') !!} </a><br/>
                        <a href="#">{!! HTML::image('img/tw.png') !!}</a><br/>
                        <a href="#">{!! HTML::image('img/gplus.png') !!}</a>
                    </div>

                    <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
                         {!!Form::open(['url'=>'auth/login','class'=>'form-horizontal'])!!}
                                {!! Form::text('email',Input::old('email'),['class'=>'form-control','placeholder'=>trans('front/login.email')]) !!}
                                <br/>
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>trans('front/login.password')]) !!}
                                <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> {!! trans('front/login.remind') !!}</small></div>
                                <div class="spacing"><a href="#"><small> {!! trans('front/login.forget') !!}</small></a><br/></div>
                                {!!Form::submit('Login',['class'=>'btn btn-info btn-sm pull-right'])!!}
                        {!!Form::close()!!}
                    </div>

                </div>

            </div>
        </div>

        <p><a href="#">About</a> · dgundogan</p>

    </div>
</body>

@stop