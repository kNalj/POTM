@extends('layouts.master')
@section('title')
    POTM Novosti
@endsection
@section('styles')
    @include('includes.styles.auth')
@endsection
@section('scripts')
    @include('includes.scripts.auth')
@endsection
@section('header')
    @include('includes.navItems.auth')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content">
            <div class="ic"></div>
            <div class="container">
                @include('includes.errorCheck')
                <div class="login">
                    <form action="{{ route('login') }}" method="post">

                        <label for="email">Email
                            <input type="text" name="email" id="email" />
                        </label>

                        <label for="password">Password
                            <input type="password" name="password" id="password" />
                        </label>

                        <div class="clear"></div>

                        <a href="{{ route('register') }}"><input type="button" value="Register" /></a>

                        <input type="submit" value="Login" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
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