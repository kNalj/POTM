@extends('layouts.master')
@section('title')
    Galerija
@endsection
@section('styles')
    @include('includes.styles.gallery')
@endsection
@section('scripts')
    @include('includes.scripts.gallery')
@endsection
@section('header')
    @include('includes.navItems.gallery')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                @include('includes.errorCheck')
                <div class="row">
                    <article class="span12">
                        <h4>Galerija</h4>
                    </article>
                    <div class="clear"></div>
                    <ul class="portfolio clearfix">
                        @foreach ($images as $img)
                            <!-- resize to 270x192 -->
                            <li class="box"><a href="{{ $img->path  }}" class="magnifier" ><img alt="" src="{{ $img->pathToThumb }}"></a></li>
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