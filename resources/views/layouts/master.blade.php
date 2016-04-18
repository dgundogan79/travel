<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel&LoveS</title>
        {!! Html::style('css/bootstrap.css') !!}
        {!! Html::style('css/customTravel.css') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        

    </head>
    <body>

        <nav class="navbar navbar-default" id="navigation">
        <div class="container-fluid">
        <div class="nav navbar-nav navbar-right">
                  
                    @if(Auth::check()) 
                    <div class="col-sm-12 controls">
                            <a>{!!Form::submit(trans('front/login.loginButton'),['class'=>'btn btn-success'])!!}</a>
                         
                        </div>
                    
                    <li><a href="{!! URL::to('password/reset')!!}">Password reset</a></li>
                    <li><a href="{!! URL::to('auth/logout')!!}">Logout</a></li>
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