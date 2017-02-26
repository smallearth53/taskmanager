<html lang="{{ config('app.locale') }}">
    <head>

        <title>Iron Gecko - @yield('title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('/css/custom.css').'?'.time()}}" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin|Crimson+Text" rel="stylesheet">
    </head>
    <body>
        @section('navbar')
        <nav class="navbar navbar-inverse navbar-fixed-top" id="nav1">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-left" style='padding-right: 20px;'></a>
                    <a class="navbar-brand" href="#"><img src='{{asset('/img/geckologo5.png')}}' height='35px' width="250" class="img-responsive"></a>

                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        <li><a href="{{url('/about')}}"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> About</a></li>
                        <li><a href="{{url('/contact')}}"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        @show

        @yield('content')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





    </body>
</html>

