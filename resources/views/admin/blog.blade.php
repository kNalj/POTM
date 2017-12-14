@extends('layouts.adminMaster')
@section('header')
    @include('includes.adminHeader')
@endsection
@section('content')
    <div class="bg-content">
        <div id="content"><div class="ic"></div>
            <div class="container">
                <form action="{{ route('admin.blog') }}" enctype="multipart/form-data" method="POST">
                    <div class="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12">
                                <input type="file" name="image" />
                            </div>
                        </div>
                    </div>
                    <div class="post">
                        <label for="title">Title
                            <input type="text" name="title" id="title" placeholder="Post title" />
                        </label>

                        <label for="teaser">Teaser
                            <input type="text" name="teaser" id="teaser" placeholder="Post teaser" />
                        </label>

                        <label for="repeat">Content
                            <textarea id="content" name="content" rows="15"></textarea>
                        </label>

                        <div class="clear"></div>

                        <input type="submit" value="Submit" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('includes.footer')
@endsection