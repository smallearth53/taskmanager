@extends('layouts.master')

@section('title', 'Contact')

@section('navbar')
@parent
@endsection

@section('content')
<div class="container">
   
   <strong>{{ $contact['id'] }} {{ $contact['email'] }}</strong> {{ $contact['message'] }} <br>
   
</div>
@endsection

