@extends('layouts.master')
@section('title')
    I was wondering ...
@endsection
@section('styles')
    @include('includes.styles.contact')
@endsection
@section('scripts')
    @include('includes.scripts.contact')
@endsection
@section('header')
    @include('includes.navItems.contact')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                @include('includes.errorCheck')
                <div class="row">
                    <article class="span8">
                        <h3>Contact us</h3>
                        <div class="inner-1">
                            <form id="contact-form" action="{{route('contact')}}" method="POST">
                                <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                                <fieldset>
                                    <div>
                                        <label class="name">
                                            <input type="text" id="name" name="name" placeholder="Your Name">
                                            <br>
                                            <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                                    </div>
                                    <div>
                                        <label class="email">
                                            <input type="email" name="email" id="email" placeholder="Email">
                                            <br>
                                            <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                                    </div>
                                    <div>
                                            <textarea name="message" id="message"></textarea>
                                            <br>
                                            <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <br/>
                                    <div class="buttons-wrapper"> <a class="btn btn-1" data-type="reset">Clear</a> <button type="submit">Send</button></div>
                                </fieldset>
                            </form>
                        </div>
                    </article>
                    <article class="span4">
                        <h3>Contact info</h3>
                        <div class="map">
                            <a href="" target="_blank"><img src="img/map.jpg" alt="Location on Map" /></a>
                        </div>
                        <address class="address-1">
                            <strong>Naziv ustanove,<br>
                                Valjda neka adresa,<br>
                                Jos malo adrese 22</strong>
                            <div class="overflow"> <span>Mobile:</span>+1234567<br>
                                <span>Telephone:</span>+1234567<br>
                                <span>FAX:</span>+1234567<br>
                                <span>E-mail:</span> <a href="#" class="mail-1">nekimail@nesto.negdi</a><br>
                                <span>Skype:</span> <a href="#" class="mail-1">?</a></div>
                        </address>
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