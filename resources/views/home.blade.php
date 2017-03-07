@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')


     <section id="hero-area" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>HI, MY NAME IS JONATHON & I AM A</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">DESIGNER</b>
                                    <b>DEVELOPER</b>
                                    <b>FATHER</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    With 10 years experience, I've occupied many roles including digital design director,<br> web designer and developer. This site showcases some of my work.
                                </h2>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >View Works</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->

        
    

    @endsection

