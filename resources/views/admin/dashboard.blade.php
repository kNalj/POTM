@extends('layouts.adminMaster')
@section('header')
    @include('includes.adminHeader')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <h4>Courses</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="thumbnails thumbnails-1 list-services">
                @foreach($coursesActive as $course)
                    <li class="span2">
                        <div class="thumbnail thumbnail-1">
                            <section> <a href="#" class="link-1">{{ $course->name }}</a>
                                @foreach($course->user as $user)
                                    <p>{{ $user->firstname.' '.$user->lastname }} ({{ $user->email }})<br/>{{ $user->birthDate }}</p>
                                @endforeach
                                <p>Total: {{ $course->user()->count()}}</p>
                            </section>
                        </div>
                    </li>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('includes.footer')
@endsection