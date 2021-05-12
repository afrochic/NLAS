@extends('layouts.app')

@section('content')
<div>
    <style>
        body,
        h1 {
            font-family: "Raleway", sans-serif;
            color: #ffb3b3;
        }

        body,
        html {
            height: 100%;
            color: #ffb3b3;
        }
    </style>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <div class="w3-display-middle">
        <h1 class="w3-jumbo w3-animate-top">Good Morning</h1>
        <hr class="w3-border-grey" style="margin:auto;width:40%">
        <p class="w3-large w3-center">click below to fill client in-take form</p>
        <a class="btn danger btn-lg" href="{{ route('client-intake-form') }}" style="text-align:center;  border-color: #f44336;
  color:#ffb3b3;">{{ __('HERE') }}</a>
    </div>
</div>
@endsection