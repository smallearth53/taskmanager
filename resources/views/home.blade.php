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
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

@endsection

