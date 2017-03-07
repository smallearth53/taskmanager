
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>

        <title>Iron Gecko - @yield('title')</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />
        <link rel="stylesheet" href="{{asset('/css/animate.css')}}"> 
        <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('/css/styles.css')}}">

        <!-- REVOLUTION BANNER CSS SETTINGS --> 
        <link rel="stylesheet" type="text/css" href="{{asset('/rs-plugin/css/settings.css')}}" media="screen" /> 

        <script src="{{asset('/js/modernizr.custom.32033.js')}}"></script> 



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('/css/custom.css').'?'.time()}}" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Cabin|Crimson+Text" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
        <!--[if lt IE 9]> 
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
        <![endif]--> 

<!--      <script src="https://unpkg.com/vue"></script>-->
        <script src="{{asset('/js/app.js')}}"></script>
      

    </head>
    <body>
        @include('layouts.nav')

        <div id="wrap" class="home">



                @yield('content')



            </div>
        


        @include('layouts.footer')