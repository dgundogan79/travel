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
            
            <li>
                        {!!Form::open(['url'=>'auth/login','class'=>'navbar-form navbar-left','role'=>'form'])!!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            {!! Form::text('email',null,array('class'=>'form-control','placeholder'=>'Email Address')) !!}
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            {!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                        </div>
                        {!!Form::submit('Login',['class'=>'btn btn-default'])!!}
                        {!!Form::close()!!}
                    </li>
        </nav>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>

</html>