@extends('layouts.master')
@section('title')
    POTM tečajevi
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
        <div class="container">
            @include('includes.errorCheck')
            <br/><br/>
            <form action="{{ route('signup') }}" method="post">
                <div class="span-4">
                    <label for="firstname">Firstname</label>
                    <input style="color: #000;" type="text" name="firstname" id="firstname"
                           value="{{ (Auth::user() != null) ? Auth::user()->firstname : "" }}">
                    <label for="email">Email</label>
                    <input style="color: #000;" type="text" name="email" id="email"
                           value="{{ (Auth::user() != null) ? Auth::user()->email : "" }}">
                    <label for="course">Select course</label>
                    <select name="course" id="course">
                        @foreach($coursesActive as $course)
                            @if($selectedCourse != null)
                                @if($course->id == $selectedCourse->id)
                                    <option value="{{ $course->id }}" selected="selected">{{ $course->name }}</option>
                                @else
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endif
                            @else
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="span-4">
                    <label for="lastname">Lastname</label>
                    <input style="color: #000;" type="text" name="lastname" id="lastname"
                           value="{{ (Auth::user() != null) ? Auth::user()->lastname : "" }}">
                    <label for="birthDate">Date of birth</label>
                    <input style="color: #000;" type="date" name="birthDate" id="birthDate"
                           value="{{ (Auth::user() != null) ? Auth::user()->birthDate : "" }}">
                    <label for="email"></label>
                    <input type="submit" name="submit" id="submit" value="OK">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@endsection
@section('about')
    @include('includes.about')
@endsection
@section('footer')
    @include('includes.footer')
@endsection