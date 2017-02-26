@extends('layouts.app')

@section('title', 'About')

@section('navbar')
@parent
@endsection

@section('content')
<div class="container">
    <h1>About me</h1>
    <img src="{{asset('/img/geckologo1.png')}}" alt="" class="img-responsive"/>
    
</div>
@endsection

