
<!DOCTYPE html>
<html>

    <head>

        <title>Iron Gecko - @yield('title')</title>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="shortcut icon" href="favicon.ico"> 
        <meta name="google-site-verification" content="8OqkxmFXFbjAAYoqNcptj6MRo3SYAf9MWWvDf9h0J-w" />

        <link rel="stylesheet" href="{{asset('/css/app.css')}}">

        <link rel="stylesheet" href="{{asset('css/custom.css?v9')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">

        <script>
            window.Laravel = <?php
echo json_encode([
    'csrfToken' => csrf_token(),
]);
?>
        </script>
        <script src="{{asset('/js/app.js')}}"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Macondo" rel="stylesheet">




    </head>
    <body>
        @include('layouts.nav')





        @yield('content')







        @include('layouts.footer')