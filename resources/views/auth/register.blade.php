@extends('layouts.master')

@section('content')

@foreach($errors->all() as $error)
<p class="alert alert-danger">{!!$error!!}</p>
@endforeach
<section id="register">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 well well-sm">
                <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
                <div class="omb_login">    
                    <h3 class="omb_authTitle">Sign up</h3>
                    <div class="row omb_row-sm-offset-3 omb_socialButtons">
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                <i class="fa fa-facebook visible-xs"></i>
                                <span class="hidden-xs">Facebook</span>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                <i class="fa fa-twitter visible-xs"></i>
                                <span class="hidden-xs">Twitter</span>
                            </a>
                        </div>	
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="btn btn-lg btn-block omb_btn-google">
                                <i class="fa fa-google-plus visible-xs"></i>
                                <span class="hidden-xs">Google+</span>
                            </a>
                        </div>	
                    </div>
                </div>

                <div class="row omb_row-sm-offset-3 omb_loginOr">
                    <div class="col-xs-12 col-sm-6">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr">------------------------   OR   ------------------------</span>
                    </div>
                </div>
                {!! Form::open(array('url' => 'auth/register','class' => 'form')) !!}
                {!! Form::label('gender','I am:    ') !!}
                {!! Form::label('gender','        Girl') !!}
                {!! Form::radio('gender','G', true) !!}
                {!! Form::label('gender','        Man') !!}
                {!! Form::radio('gender', 'M', null) !!}
                <br/>
                <br/>

                {!! Form::label('username','Username') !!}
                {!! Form::text('username', Input::old('username') , array('class' => 'form-control', 'placeholder' => 'Username', 'type' => 'name')) !!}
                {!! Form::label('email','Your Email') !!}
                {!! Form::text('email', Input::old('email') , array('class' => 'form-control', 'placeholder' => 'Your Email', 'type' => 'email')) !!}
                {!! Form::label('password','Password') !!}
                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password')) !!}
                {!! Form::label('age','Age') !!}
                {!! Form::selectRange('age', 18, 99, 18, ['class' => 'form-control']) !!}
                <br/>
                {!! Form::submit('Sign Up', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
</div>

@stop