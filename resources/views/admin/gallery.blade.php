@extends('layouts.adminMaster')
@section('header')
    @include('includes.adminHeader')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                <form action={{route('admin.gallery')}} method="post">
                    @foreach($images as $img)
                        @if($img->isPartOfGallery)
                            <ul class="thumbnails thumbnails-1 list-services">
                                <div class="row">
                                    <li class="span4">
                                        <div class="thumbnail thumbnail-1"> <img  src="{{'../'.$img->path }}" alt="">
                                        </div>
                                        <input type="checkbox" name="delete[]" value="{{ $img->id }}">
                                    </li>
                                </div>
                            </ul>
                        @endif
                    @endforeach
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input type="submit" value="Delete">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('includes.footer')
@endsection