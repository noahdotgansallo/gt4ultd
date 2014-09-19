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
            Here is our information desk. It is filled with many helpful powerpoint and PDF files to help you understand the technologies that we implement here at GT4U.
            We hope that you find it helpful<br><br>
            <!--<a href="{{asset('download/Equipment.ppt')}}" class="link width-wider pure-button pure-button-primary" download><span class="ion-ios7-download-outline"></span> Powerpoint Download</a>
            <a href="{{asset('download/Equipment.pdf')}}" class="link width-wider pure-button pure-button-primary" download><span class="ion-ios7-download-outline"></span> PDF download</a>
            -->
            </p>
            <div class="pure-g">
                <a class="pure-u-2-5 tab-pane tecno" href="{{asset('download/tecnovideo.pdf')}}" style="background-image:url('{{asset("img/tecno.png")}}')"><p class="text-bottom">Tecno Video</p></a>
                <div class="pure-u-1-5 spacer"><p class="text-bottom"></p></div>
                <a class="pure-u-2-5 tab-pane synetics" href="{{asset('download/synetics.pdf')}}" style="background-image:url('{{asset("img/synetics.png")}}')"><p class="text-bottom">Synetics</p></a>
                <!--spacer
                <div class="pure-u-2-5 spacer"><p class="text-bottom"></p></div>
                <div class="pure-u-1-5 spacer"><p class="text-bottom"></p></div>
                <div class="pure-u-2-5 spacer"><p class="text-bottom"></p></div>

                <a class="pure-u-2-5 tab-pane" href="#"><p class="text-bottom">Thirds</p></a>
                <div class="pure-u-1-5 spacer"><p class="text-bottom"></p></div>
                <a class="pure-u-2-5 tab-pane" href="#"><p class="text-bottom">Thirds</p></a>
                -->
            </div>

            

        </div>
@stop