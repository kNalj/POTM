<script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/superfish.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/jquery.cookie.js') }}"></script>
<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
<script>
    jQuery(window).load(function() {
        $x = $(window).width();
        if($x > 1024)
        {
            jQuery("#content .row").preloader();    }

        jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});
    });

</script>