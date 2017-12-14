@extends('layouts.master')
@section('title')
    Welcome to POTM
@endsection
@section('styles')
    @include('includes.styles.home')
@endsection
@section('scripts')
    @include('includes.scripts.scripts')
@endsection
@section('header')
    @include('includes.navItems.home')
@endsection
@section('content')
    <div class="bg-content">
        <div class="container">
            @include('includes.errorCheck')
            <div class="row">
                <div class="span12">
                    <!-- slider -->
                    <div class="flexslider">
                        <ul class="slides">
                            <li> <img src="{{ URL::to('img/slide-1.jpg') }}" alt="" > </li>
                            <li> <img src="{{ URL::to('img/slide-2.jpg') }}" alt="" > </li>
                            <li> <img src="{{ URL::to('img/slide-3.jpg') }}" alt="" > </li>
                            <li> <img src="{{ URL::to('img/slide-4.jpg') }}" alt="" > </li>
                            <li> <img src="{{ URL::to('img/slide-5.jpg') }}" alt="" > </li>
                        </ul>
                    </div>
                    <span id="responsiveFlag"></span>
                    <div class="block-slogan">
                        <h2>Hello world!</h2>
                        <div>
                            <p>Svake godine OSS organizira tečajeve ...
                                i sad ja tu nešto pišem jer tu ćemo kao nešto napisati i eto to ti meni sad izgleda baš super.
                                Mislia san da ce mi bit dovoljno teksta, ali evo jos malo cu dodat da bolje izgleda.</p>
                            <!-- Botun koji otvara formu za prijavu na tecaj ako si logiran,
                             ako nisi logiran vodi na login formu -->
                            @if(!Auth::user())
                                <p style="text-align:center; padding-top:20px;"><a href="{{ route('login') }}" class="btn btn-1">Prijavi se !</a></p>
                            @else
                                <p style="text-align:center; padding-top:20px;"><a href="{{ route('signup') }}" class="btn btn-1">Prijavi se !</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="content-extra"><div class="ic"></div>
        <div class="row-1">
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <h4>Galerija</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="portfolio clearfix">
                        @foreach($galleryThumbs as $img)
                            <li class="box"><a href="{{ $img->path }}" class="magnifier" ><img alt="" src="{{ $img->pathToThumb }}"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-2">
            <div class="container">
                <h3>Sad tu opet ide neki text neznam sta ce bit</h3>
                <h3>Moram razmislit. Pa nešto stavit tu. Da izgleda dobro!</h3>
                <p>I sad nakon svega toga ode napišen nešto o svemu tome jer to je kao baš kul.</p>
                <a href="{{ route('gallery') }}" class="btn btn-1">Botun</a>
            </div>
        </div>

        <div class="row-1">
            <div class="container">
                <div class="row">
                    <article class="span12">
                        <h4>Novosti</h4>
                    </article>
                    <ul class="thumbnails thumbnails-1">
                        @foreach($postsLatest as $post)
                            <li class="span3">
                                <div class="thumbnail thumbnail-1">
                                    <h3>{{ $post->title }}</h3>
                                    <img  src="{{ $post->media->pathToThumb }}" alt="">
                                    <section>
                                        <div class="meta">
                                            <time datetime="2012-11-09" class="date-1"><i class="icon-calendar"></i>{{ $post->created_at }}</time>
                                            <div class="name-author"><i class="icon-user"></i> <a href="#">{{ $post->user->email }}</a></div>
                                            <a href="#" class="comments"><i class="icon-comment"></i> 7 </a>
                                        </div>
                                        <div class="clear"></div>
                                        <p>{{ $post->teaser }}</p>
                                        <a href="{{ route('blog', ['post_id' => $post->id]) }}" class="btn btn-1">Read More</a> </section>
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