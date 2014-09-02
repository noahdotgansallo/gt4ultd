@extends('template')

@section('title')
About
@stop
@section('content')
<div class="header">
            <h1>About</h1>
            <h2>We want to give you a little insight into our history</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Our History</h2>
            <p>
                With an ambitious mission, we strive to serve our customers to the best of our ability. 
            </p>
            <br>
            

            <div class="pdf">
                <object style="height:100%;width:100%"  data="{{asset('download/profile.pdf')}}#toolbar=1&navpanes=0&scrollbar=1&page=1&view=FitH" type="application/pdf">
                    
                </object>
            </div>
        </div>
@stop