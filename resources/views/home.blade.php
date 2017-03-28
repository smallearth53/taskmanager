@extends('layouts.master')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')



    <div class="container">
        <div class="row">


            <div>

                <div class="row">

                    <div class="col-lg-4">
                        <h2 class='content-header'>Rich Creamy Coffee</h2>
                        <p id="test">
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    </div>
                    <div class="col-lg-4">
                        <h2 class='content-header'>Dark and Foamy</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
                        </p>
                    </div>

                    <div class="col-lg-4">
                        <div id='mask'>

                            <img src="{{asset('img/mask.png')}}" class="animated fadeInLeftBig"></p>
                        </div>
                    </div>
                </div>




            </div>


        </div>
    </div>







@endsection

