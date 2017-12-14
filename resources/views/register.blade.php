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
        <div id="content"><div class="ic"></div>
            <div class="container">
                @include('includes.errorCheck')
                <div class="login">
                    <form action="{{ route('register') }}" method="post">

                        <label for="firstname">Firstname
                            <input type="text" name="firstname" id="firstname" placeholder="Firstname" />
                        </label>

                        <label for="lastname">Lastname
                            <input type="text" name="lastname" id="lastname" placeholder="Lastname" />
                        </label>

                        <label for="birthDate">Date of birth
                            <input type="text" name="birthDate" id="birthDate" placeholder="yyyy-mm-dd" />
                        </label>

                        <label for="email">Email
                            <input type="text" name="email" id="email" placeholder="example@some.domain"/>
                        </label>

                        <label for="password">Password
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </label>

                        <label for="repeat">Repeat
                            <input type="password" name="repeat" id="repeat" placeholder="Password"/>
                        </label>

                        <div class="clear"></div>

                        <input type="submit" value="Submit" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
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