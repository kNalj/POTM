@extends('layouts.adminMaster')
@section('header')
    @include('includes.adminHeader')
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
                                    <h2>{{ $selectedCourse->name }}</h2>
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
                                                <section> <a href="{{route('admin.courses', ['course_id' => $coursesActive[$i]->id])}}" class="link-1">{{ $coursesActive[$i]->name }}</a>
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
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('includes.footer')
@endsection