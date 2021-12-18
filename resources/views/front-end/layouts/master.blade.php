<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link href="/site/assets/css/loader.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="{{asset('site/assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('site/assets/fontawesome/css/all.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('site/assets/css/app.css')}}" media="screen"/>

    <title>PIB – Action-packed video game</title>

    @yield('css')
</head>

<body>

<div class="progress-wrap">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</div>


@include('front-end.layouts.header')

@yield('main')

@include('front-end.layouts.footer')


<script src="/site/assets/js/jquery-1.10.2.min.js"></script>
<script src="/site/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">

    /* === Shrink Header on Scroll === */
    var header = $('.header-2');
    var shrinkIt = header.height();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if ( scroll >= shrinkIt ) {
            header.addClass('sticky-header');
        }
        else {
            header.removeClass('sticky-header');
        }
    });

    window.onscroll = function() {myFunction()};

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }

</script>
</body>

</html>
