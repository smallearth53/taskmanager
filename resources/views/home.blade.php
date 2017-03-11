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
                                <span>WE ARE PANZIS</span><br>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">DESIGNERS</b>
                                    <b>DEVELOPERS</b>
                                    <b>SEO CONSULTANTS</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    Help us to help your business be amazing
                                </h2>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works" >View Works</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->

        
    

    @endsection

