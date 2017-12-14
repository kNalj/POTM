@extends('layouts.master')
@section('title')
    O tecajevima
@endsection
@section('styles')
    @include('includes.styles.courses')
@endsection
@section('scripts')
    @include('includes.scripts.courses')
@endsection
@section('header')
    @include('includes.navItems.courses')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                @include('includes.errorCheck')
                <div class="row">
                    <article class="span12">
                        <h4>Active courses</h4>
                    </article>
                    <div class="clear"></div>
                    @if($selectedCourse != null)
                        <ul class="thumbnails thumbnails-1 list-services">
                            <li class="span8">
                                <div class="thumbnail thumbnail-1">
                                    <article class="span12">
                                        <h4>{{ $selectedCourse->name }}</h4>
                                    </article>
                                    <div class="clear"></div>
                                    <section>
                                        <p>{{ $selectedCourse->courseDescription->content }}</p>
                                    </section>
                                    @if($selectedCourse->status == "active")
                                        @if(!Auth::user())
                                            <p style="text-align:center; padding-top:20px;"><a href="{{ route('login') }}" class="btn btn-1">Prijavi se !</a></p>
                                        @else
                                            <p style="text-align:center; padding-top:20px;"><a href="{{ route('signup', ['course_id' => $selectedCourse]) }}" class="btn btn-1">Prijavi se !</a></p>
                                        @endif
                                    @endif
                                    @foreach($comments as $comment)
                                        <p><div>
                                            {{ $comment->content }}
                                        </div></p>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                    @endif
                    <ul class="thumbnails thumbnails-1 list-services">
                        @for($i=0;$i<$coursesActive->count();$i++)
                            @if($coursesActive[$i]->user()->count() < $coursesActive[$i]->capacity)
                                @if($i%3 == 0)
                                    <div class="row">
                                @endif
                                <li class="span4">
                                    <div class="thumbnail thumbnail-1"> <img  src="{{'../'.$coursesActive[$i]->media->path }}" alt="">
                                        <section> <a href="{{route('courses', ['course_id' => $coursesActive[$i]->id])}}" class="link-1">{{ $coursesActive[$i]->name }}</a>
                                            <p>{{ $coursesActive[$i]->teaser }}</p>
                                        </section>
                                    </div>
                                </li>
                                @if($i%3 == 2)
                                    </div>
                                @endif
                            @endif
                        @endfor
                    </ul>
                </div>
                <!-- Aktivni popunjeni -->
                <div class="row">
                    <article class="span12">
                        <h4>Full coursees</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="thumbnails thumbnails-1 list-services">
                        @foreach($coursesActive as $course)
                            @if(!($course->user()->count() < $course->capacity))
                                <li class="span4">
                                    <div class="thumbnail thumbnail-1"> <img  src="{{' ../'.$course->media->path }}" alt="">
                                        <section> <a href="{{route('courses', ['course_id' => $course->id])}}" class="link-1">{{ $course->name }}</a>
                                            <p>{{ $course->teaser }}</p>
                                        </section>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    <article class="span12">
                        <h4>Old courses</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="thumbnails thumbnails-1 list-services">
                        @foreach($coursesOld as $course)
                            <li class="span4">
                                <div class="thumbnail thumbnail-1"> <img  src="{{' ../'.$course->media->path }}" alt="">
                                    <section> <a href="{{route('courses', ['course_id' => $course->id])}}" class="link-1">{{ $course->name }}</a>
                                        <p>{{ $course->teaser }}</p>
                                    </section>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('about')
    @include('includes.about')
@endsection
@section('footer')
    @include('includes.footer')
@endsection