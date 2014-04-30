@extends('template')
@section('title')
Location
@stop
@section('content')
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(6.4531,3.3958),
          zoom: 11,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<div class="header">
            <h1>Locations</h1>
            <h2>We are located in Lagos, Nigeria</h2>
        </div><br>

        <div class="content">
          <center><div id="map_canvas"></div></center>
           
            <h2 class="content-subhead">Locations Policy</h2>
            <p>
                We are located in Nigeria and offer services to the surrounding regions. If you believe that you may be outside our region but still would like our services, please use the <a href="contactus.html" class="homepage-welcome-founder">contact us</a> page to tell us exactly where you are.
            </p>
        </div>
@stop