@extends('layouts.master')

@section('title', 'Contact')

@section('navbar')
@parent
@endsection

@section('content')
<div class="container">
   @foreach ($contacts as $contact)
   <strong>{{ $contact['id'] }} {{ $contact['email'] }}</strong> {{ $contact['message'] }} <br>
   @endforeach 
</div>
@endsection

