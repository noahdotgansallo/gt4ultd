@extends('template')
@section('title')
Equipment
@stop
@section('content')
<div class="header">
            <h1>Equipment</h1>
            <h2>We place high value on our customers and we guarantee that our equipment is the best available to us</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Our Equipment</h2>
            <p>
            Here is a presentation of the equipment that we use<br>
            We hope that you find it helpful<br><br>
            <a href="{{asset('download/Equipment.ppt')}}" class="link width-wider pure-button pure-button-primary" download><span class="ion-ios7-download-outline"></span> Powerpoint Download</a>
            <a href="{{asset('download/Equipment.pdf')}}" class="link width-wider pure-button pure-button-primary" download><span class="ion-ios7-download-outline"></span> PDF download</a>
            </p>

            

        </div>
@stop