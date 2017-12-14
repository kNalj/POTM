<header>
    <div class="container clearfix">
        <div class="row">
            <div class="span12">
                <div class="navbar navbar_">
                    <div class="container">
                        <div class="nav-collapse nav-collapse_  collapse">
                            <ul class="nav sf-menu">
                                <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li><a href="{{ route('admin.gallery') }}">Galerija</a></li>
                                <li><a href="{{ route('admin.blog') }}">Blog</a></li>
                                <li class="sub-menu"><a href="{{ route('admin.courses') }}">Tečajevi</a>
                                    <ul>
                                        @foreach($coursesActive as $course)
                                            <li><a href="{{route('admin.courses', ['course_id' => $course->id])}}">{{ $course->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>