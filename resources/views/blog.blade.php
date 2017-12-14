@extends('layouts.master')
@section('title')
    POTM Novosti
@endsection
@section('styles')
    @include('includes.styles.blog')
@endsection
@section('scripts')
    @include('includes.scripts.blog')
@endsection
@section('header')
    @include('includes.navItems.blog')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                @include('includes.errorCheck')
                <div class="row">
                    <article class="span8">
                        <div class="inner-1">
                            <ul class="list-blog">
                                @if(!$selectedPost)
                                    @foreach($posts as $post)
                                        <li>
                                             <h3>{{ $post->title }}</h3>
                                            <time datetime="{{ $post->created_at }}" class="date-1"><i class="icon-calendar icon-white"></i> {{ $post->created_at }}</time>
                                            <div class="name-author">
                                                <i class="icon-user icon-white"></i>
                                                <a href="{{ route('contact') }}">{{ $post->user->email}}</a>
                                            </div>
                                            <div class="clear"></div>
                                            <img alt="" src="../{{ $post->media->path }}">
                                            <p>{{ $post->teaser }}</p>
                                            <a href="{{ route('blog', ['post_id' => $post->id]) }}" class="btn btn-1">Read More</a>
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <h3>{{ $selectedPost->name }}</h3>
                                        <time datetime="{{ $selectedPost->created_at }}" class="date-1"><i class="icon-calendar icon-white"></i> {{ $selectedPost->created_at }}</time>
                                        <div class="name-author">
                                            <i class="icon-user icon-white"></i>
                                            <a href="{{ route('contact') }}">{{ $selectedPost->user->email}}</a>
                                        </div>
                                        <div class="clear"></div>
                                        <img alt="" src="../{{ $selectedPost->media->path }}">
                                        <p>{{ $selectedPost->postContent->content }}</p>
                                        <a href="{{ route('blog') }}" class="btn btn-1">Back</a>
                                    </li>
                                    @foreach($comments as $comment)
                                        <li>{{ $comment->content }}</li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </article>
                    <article class="span4">
                        <h3>Archive</h3>
                        <div class="wrapper">
                            <ul class="list extra2 list-pad ">
                                @for($i=1;$i<7;$i++)
                                    @if($i<$month)
                                        <li><a href="#">{{$year}}-{{ $month-$i }}</a></li>
                                    @else
                                        <li><a href="#">{{$year-1}}-{{ $month-$i+12 }}</a></li>
                                    @endif
                                @endfor
                            </ul>
                            <ul class="list extra2">
                                @for($i=7;$i<13;$i++)
                                    @if($i<$month)
                                        <li><a href="#">{{$year}}-{{ $month-$i }}</a></li>
                                    @else
                                        <li><a href="#">{{$year-1}}-{{ $month-$i+12 }}</a></li>
                                    @endif
                                @endfor
                            </ul>

                        </div>
                    </article>
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