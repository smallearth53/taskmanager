
<!DOCTYPE html>
<html class="no-js">
    <!--<![endif]-->
    <head>

        <title>Iron Gecko - @yield('title')</title>

        <meta charset="utf-8">
       
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="shortcut icon" href="favicon.ico"> 
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />
        <!-- Fonts -->
<!--        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->


<!--        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css"/>-->
<!--        <link href="{{asset('/css/custom.css').'?'.time()}}" rel="stylesheet" type="text/css"/>-->
<!--        <script src="{{asset('/js/app.js')}}"></script>-->
        
        <!--Custom starts here -->
         <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{asset('/css/ionicons.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{asset('/css/slider.css')}}">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        
           
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="{{asset('/js/modernizr-2.6.2.min.js')}}"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="{{asset('/js/owl.carousel.min.js')}}"></script>
        <!-- bootstrap js -->

        <script src="{{asset('/js/bootstrap.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('/js/wow.min.js')}}"></script>
        <!-- slider js -->
        <script src="{{asset('/js/slider.js')}}"></script>
        <script src="{{asset('/js/jquery.fancybox.js')}}"></script>
        <!-- template main js -->
        <script src="{{asset('/js/main.js')}}"></script>

        
        <!--Custom ends here -->

      

    </head>
    <body>
        @include('layouts.nav')

        <div id="wrap" class="home">



                @yield('content')



            </div>
        


        @include('layouts.footer')