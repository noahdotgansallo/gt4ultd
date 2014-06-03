<!doctype html>
<?php
$selected = 'class="pure-menu-selected"';
$divided = 'class="menu-item-divided"';
$url = $_SERVER['REQUEST_URI'];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>@yield('title')</title>

    




<link rel="stylesheet" href="css/pure.css">

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">



<link rel="stylesheet" href="css/css/layouts/side-menu.css">
<link rel="stylesheet" type="text/css" href="css/js/ui.js">
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css">





    

    

</head>
<body>






<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <a class="pure-menu-heading" href="{{url('/')}}">GT4U</a>

            <ul>
                <li <?php echo (strpos($url, 'home') !== false) ? $selected : '' ?>><a href="{{url('/')}}"><span class="ion-home"></span> Home</a></li>
                <li <?php echo (strpos($url, 'about') !== false) ? $selected : '' ?>><a href="{{url('/about')}}"><span class="ion-paper-airplane" ></span> About</a></li>
                <li <?php echo (strpos($url, 'team') !== false) ? $selected : '' ?>><a href="{{action('HomeController@staff')}}"> <span class="ion-person-stalker"></span> Team</a></li>
                <li <?php echo (strpos($url, 'equipment') !== false) ? $selected : '' ?>><a href="{{url('/equipment')}}"><span class="ion-settings" ></span> Equipment</a></li>
                <li <?php echo (strpos($url, 'locations') !== false) ? $selected : '' ?>><a href="{{url('/locations')}}"><span class="ion-ios7-navigate" ></span> Locations</a></li>
                <li <?php echo (strpos($url, 'services') !== false) ? $selected : '' ?>><a href="{{url('/services')}}"><span class="ion-information-circled" ></span> Services</a></li>

                <li <?php echo (strpos($url, 'contact') !== false) ? $selected : ''; echo "$divided"; ?>><a href="{{url('/contact')}}" title="Coming Soon..."><span class="ion-android-inbox"></span> Contact</a></li>
                <li <?php echo (strpos($url, 'help') !== false) ? $selected : '' ?>><a href="{{url('/help')}}"><span class="ion-help-buoy" title="Coming Soon..."></span> Help</a></li>
                <li <?php echo (strpos($url, 'support') !== false) ? $selected : '' ?>><a href="{{url('/support')}}" title="Coming Soon..."><span class="ion-clipboard"></span> Support</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        @yield('content')
    </div>
</div>





<script src="pure-css/menu/js/ui.js"></script>
<script>
YUI().use('node-base', 'node-event-delegate', function (Y) {
    // This just makes sure that the href="#" attached to the <a> elements
    // don't scroll you back up the page.
    Y.one('body').delegate('click', function (e) {
        e.preventDefault();
    }, 'a[href="#"]');
});
</script>


</body>
</html>
