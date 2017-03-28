
<nav class="navbar navbar-default">
            <div class='container'>
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                   
                    </button>
                
                    <div class="navbar-brand">
                        <a href="{{url('/')}}" >
                            <img src="img/geckologo5.png" height=30px" alt="">
                        </a>
                       
                    </div>
                    
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{url('/')}}" >Home</a>
                            </li>
                            <li><a href="{{url('/about')}}">About</a></li>                     
                        
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                            @if (Auth::check())
                            <a href="{{url('/login')}}" class='navbar-text'>Welcome, {{ Auth::user()->name }}!</a>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
               
            
        </nav>
