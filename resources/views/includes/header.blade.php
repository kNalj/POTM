<header>
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <h1 class="brand brand_"><a href="{{ route('home') }}"><img alt="" src="{{ URL::to('img/POTMlogo.png') }}"> </a></h1>
                        <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                @yield('navItems')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>