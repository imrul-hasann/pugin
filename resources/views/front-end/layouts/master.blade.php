<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link href="/site/assets/css/loader.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="/site/assets/css/bootstrap.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="/site/assets/css/app.css" media="screen"/>

    <title>PIB – Action-packed video game</title>

    @yield('css')
</head>

<body class="responsive">

@include('front-end.layouts.header')

@yield('main')

@include('front-end.layouts.footer')


<script src="/site/assets/js/jquery-1.10.2.min.js"></script>
<script src="/site/assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(document).on('click', '.flaticon-menu-1', function (e) {
        $('#off-canvas-menu').css('left', '0');
    });
    $(document).on('click', '.flaticon-cancel', function (e) {
        $('#off-canvas-menu').css('left', '-280px');
    });
    $(document).on('click', '#openPlaylist .playlist-toggle', function (e) {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $('#playlist').removeClass('open');
        } else {
            $(this).addClass('open');
            $('#playlist').addClass('open');
        }
    });
    $(document).on('click', '.jp-play', function (e) {
        if ($(this).hasClass('now-playing')) {
            $(this).removeClass('now-playing');
            $(this).parents('.jp-audio').removeClass('jp-state-playing');
        } else {
            $(this).addClass('now-playing');
            $(this).parents('.jp-audio').addClass('jp-state-playing');
        }
    });
    $(document).on('click', '.jpl-play', function (e) {
        if ($(this).hasClass('now-playing')) {
            $(this).removeClass('now-playing');
        } else {
            $(this).addClass('now-playing');
        }
    });
    $(document).on('click', '.expander', function (e) {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(this).text('+');
            $(this).parent().siblings('.tabBlock').css('display', 'none');
        } else {
            $(this).addClass('open');
            $(this).text('-');
            $(this).parent().siblings('.tabBlock').addClass('open');
            $(this).parent().siblings('.tabBlock').css('display', 'block');
        }
    });
    $(document).on('mouseenter', '.social-widgets .item', function (e) {
        $(this).addClass('active');mas
    });
    $(document).on('mouseleave', '.social-widgets .item', function (e) {
        $(this).removeClass('active');
    });
</script>
</body>

</html>
