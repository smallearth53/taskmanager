<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('/css/custom.css?v=1.11')}}" rel="stylesheet" type="text/css"/>

       

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Task Manager</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        <li><a href="#about"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> About</a></li>
                        <li><a href="#about"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

<!--         start of carousel 
-->        <div id = "myCarousel" class = "carousel slide" data-ride="carousel">

            
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

        </div> 

        <!-- end of carousel -->
        
    


        <div class="container">

            <div class="starter-template">
                <div class="page-header">
                    <h1>Example page header <small>Subtext for header</small></h1>
                </div>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
                <div class="row">
                    <div class="col-md-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consectetur massa imperdiet arcu hendrerit, eget egestas urna aliquam. Sed faucibus, sapien vitae bibendum rutrum, mi metus eleifend nisl, ultrices laoreet eros tellus eu ligula. Vivamus consequat mi sit amet purus volutpat venenatis vitae at odio. Fusce pretium erat vitae ipsum imperdiet consectetur. Pellentesque eget ultricies nunc. Nullam elit justo, vestibulum non risus in, accumsan laoreet sapien. Praesent porttitor lacus in nulla mollis vestibulum. Nunc eget elementum est, nec vehicula odio. Phasellus ligula arcu, imperdiet eu nibh at, vestibulum imperdiet enim. Nunc mattis fringilla bibendum. Maecenas vulputate mollis sodales. Nam eget est tincidunt, efficitur lacus et, vestibulum lorem.
                    </div>
                    <div class="col-md-4">
                        Phasellus hendrerit nunc a sapien rutrum, ut imperdiet libero ultrices. Ut rutrum lorem tellus, ac cursus leo faucibus nec. Donec congue ligula ipsum, et aliquam libero elementum eu. Pellentesque fermentum ex vel lobortis pharetra. Morbi a placerat metus, vel accumsan lorem. Morbi gravida pharetra faucibus. Suspendisse sit amet lobortis metus. Maecenas non nisl vel lectus tristique cursus. Donec sed lacus nec neque pulvinar pharetra id nec nisl. Maecenas lobortis odio nec tellus sodales, sed feugiat mauris congue.
                    </div>
                    <div class="col-md-4">
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin gravida ante in euismod euismod. Vivamus libero nibh, euismod laoreet sapien a, ullamcorper maximus tellus. Vivamus quis turpis ac arcu vehicula feugiat. In hac habitasse platea dictumst. Nullam enim arcu, iaculis eu ipsum at, eleifend malesuada urna. Cras eu sollicitudin est, id tincidunt sapien. Etiam aliquet tortor nisi, id faucibus nibh ullamcorper sit amet. Aenean suscipit ante in mi ultrices aliquet. Integer sagittis sapien urna, sit amet rhoncus enim sollicitudin sit amet. Phasellus eu libero risus.
                    </div>

                </div>
            </div>

        </div><!-- /.container -->

<!--        <script>
            $('.carousel').carousel()
        </script>-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="../../public/js/custom.js" type="text/javascript"></script>
        

        
         <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
