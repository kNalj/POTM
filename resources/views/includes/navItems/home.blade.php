@extends('includes.header')

@section('navItems')
    <li class="active"><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('gallery') }}">Galerija</a></li>
    <li><a href="{{ route('blog') }}">Blog</a></li>
    <li class="sub-menu"><a href="{{ route('courses') }}">Tečajevi</a>
        <ul>
            @foreach($coursesActive as $course)
                <li><a href="{{route('courses', ['course_id' => $course->id])}}">{{ $course->name }}</a></li>
            @endforeach
        </ul>
    </li>
    <li><a href="{{ route('contact') }}">Kontakt</a></li>
    @if(!Auth::user())
        <li><a href="{{ route('login') }}">Login</a></li>
    @else
        <li><a href="{{ route('logout') }}">Logout</a></li>
    @endif
@endsection