<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/responsive.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/jquery.preloader.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/superfish.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/touchTouch.jquery.js') }}"></script>
    <script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src="+"../"+"'js/jquery.preloader.js'></"+"script>");}	</script>
    <script>
        $(document).ready(function() {
            jQuery(window).load(function () {
                $x = $(window).width();
                if ($x > 1024) {
                    jQuery("#content .row").preloader();
                }

                jQuery('.spinner').animate({'opacity': 0}, 1000, 'easeOutCubic', function () {
                    jQuery(this).css('display', 'none')
                });
            });
        });
    </script>
</head>
<body>
@yield('header')
@yield('content')
@yield('footer')
</body>
</html>