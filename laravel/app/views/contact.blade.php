@extends('template')
@section('title')
Contact Us
@stop
@section('content')
<div class="header">
    <h1>Leave us a Message</h1>
    <h2>We're greatful to hear from you, whether it be suggestions or just comments</h2>
</div>

<div class="content">
    <h2 class="content-subhead">Leave us a message</h2>
    <form class="pure-form" action="{{action('HomeController@handleContact')}}" method="post">
        <div class="spacer-contactus">
            <fieldset class="pure-group float-left width-title">
                <input type="text" class="pure-input-1-4 override-width float-center" name="subject" placeholder="Title" required>
                <br>
                <input type="email" class="pure-input-1-3 override-width float-center" name="email" placeholder="Return Email" required>
                <br>
                <input type="text" class="pure-input-1-4 override-width float-center" name="topic" placeholder="Topics (Optional)">
            </fieldset>

            <fieldset class="pure-group float-left width-content">
                <textarea class="pure-input-1-2 contactus-textarea" name="content" placeholder="Your Message" required></textarea>
            </fieldset>

            <button type="submit" class="pure-button pure-input-1-1 pure-button-primary contactus-send">Send</button>
        </div>
    </form>
</div>
@stop