@extends('master')
@section('title', 'Pincode')
@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center text-border animated slideInDown">Pin</h1>
            </div>
        </div>
        <div class="parallax">
            <img src="{{url('/images/pin/pin.jpg')}}" alt="Background Image">
        </div>
    </div>

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12">
                    <h1 class="center"><i class="fas fa-credit-card"></i></h1>
                    <p>De code voor het uur {{date("H")}} is <b>{{$code}}</b>.</p>
                    <p>De tijd op de server is {{date("H:i")}} en de tijdzone is {{date_default_timezone_get()}}.</p>
                </div>
            </div>

        </div>
    </div>
@stop
