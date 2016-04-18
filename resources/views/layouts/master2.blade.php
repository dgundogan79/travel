<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasks</title>
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/customTravel.css') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>
    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Travel</a>
                    
                </div>
                <div class="nav navbar-nav navbar-right">
                  
                    @if(Auth::check()) 
                    <li><a href="{!! URL::to('password/reset')!!}">Password reset</a></li>
                    <li><a href="{!! URL::to('auth/logout')!!}">Logout</a></li>

                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{!! Auth::User()->username !!} <span class="glyphicon glyphicon-user pull-right"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account Settings <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                <li class="divider"></li>
                                <li><a href="#">User stats <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
                                <li class="divider"></li>
                                <li><a href="#">Messages <span class="badge pull-right"> 42 </span></a></li>
                                <li class="divider"></li>
                                <li><a href="#">Favourites Snippets <span class="glyphicon glyphicon-heart pull-right"></span></a></li>
                                <li class="divider"></li>
                                <li><a href="{!! URL::to('auth/logout') !!}">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                            </ul>
                        </li>
                    </ul>

                    @else 
                    <li><a href="{!! URL::to('auth/login')!!}">Login</a></li>
                    <li><a href="{!! URL::to('auth/register') !!}">Register</a></li>
                    <li>
                        {!!Form::open(['url'=>'auth/login','class'=>'navbar-form navbar-right','role'=>'form'])!!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            {!! Form::text('email',Input::old('email'),array('class'=>'form-control','placeholder'=>'Email Address')) !!}
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                        </div>
                        {!!Form::submit('Login',['class'=>'btn btn-default'])!!}
                        {!!Form::close()!!}
                    </li>
                    @endif
                </div>
            </div>
        </nav>

        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>

    </body>
</html>