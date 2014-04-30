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
            <a class="pure-menu-heading" href="">GT4U</a>

            <ul>
                <li class="pure-menu-selected"><a href="#" ><span class="ion-close-circled"></span> 404 Error</a></li>
                <li><a href="{{action('HomeController@back')}}"><span class="ion-arrow-left-c"></span> Back</a></li>
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
