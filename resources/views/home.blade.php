@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')
<!--<div id = "myCarousel" class = "carousel slide" data-ride="carousel">


    <ol class = "carousel-indicators">
        <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
        <li data-target = "#myCarousel" data-slide-to = "1"></li>
        <li data-target = "#myCarousel" data-slide-to = "2"></li>
    </ol>   


    <div class="carousel-inner">
        <div class = "item active">
            <img src="{{asset('/img/fractal1.png')}}">
            <div class="carousel-caption">
                <h3>Task Manager</h3>
                <p>A custom built Task management System</p>
            </div>
        </div>

        <div class = "item">
            <img src="{{asset('/img/fractal2.png')}}" >
        </div>

        <div class = "item">
            <img src="{{asset('/img/fractal3.png')}}">
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div> -->
<div class="container">
    <h1>Home Page</h1> 
</div>

@endsection

