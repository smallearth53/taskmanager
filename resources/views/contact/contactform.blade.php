@extends('layouts.master')

@section('title', 'About')

@section('navbar')
@parent
@endsection

@section('content')


<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Contact</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}}">
                                Home
                            </a>
                        </li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->


<section>
    <div class="container"> 
        <div class="row"> 

            <div class="col-sm-12">
                <h1>Contact form</h1>


                <form class="form-horizontal" method='POST' action='/contact'>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name='email' placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Message:</label>
                        <div class="col-sm-8"> 
                            <textarea type="text" class="form-control" id="message" name='message' placeholder="Enter your message"></textarea>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    
                    @if(count($errors))
                    <div class='form-group'>
                        <div class='alert alert-danger'>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div> 
                    </div>
                    @endif
                </form>







            </div>
        </div>
    </div>
</section>



@endsection
