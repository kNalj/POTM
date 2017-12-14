<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

////GET routes////

Route::get('/', [
    'uses' => 'BaseController@getHome',
    'as' => 'home'
]);

Route::get('/gallery', [
   'uses' => 'BaseController@getGallery',
    'as' => 'gallery'
]);

Route::get('/contact', [
   'uses' => 'BaseController@getContact',
    'as' => 'contact'
]);

Route::get('/blog/{post_id?}', [
    'uses' => 'BaseController@getBlog',
    'as' => 'blog'
]);

Route::get('/courses/{course_id?}', [
   'uses' => 'BaseController@getCourses',
    'as' => 'courses'
]);

Route::group(['middleware' => 'App\Http\Middleware\AuthMiddleware'], function () {


    Route::get('/signup/{course_id?}', [
       'uses' => 'BaseController@getSignupForm',
        'as' => 'signup'
    ]);

});

////POST Routes////
Route::group(['middleware' => 'App\Http\Middleware\AuthMiddleware'], function () {

    Route::post('/signup/{course_id?}', [
    'uses' => 'POSTController@postSignupForm',
    'as' => 'signup'
    ]);
});


Route::post('/contact', [
   'uses' => 'POSTController@postMessage',
    'as' => 'contact'
]);

////Authentication Routes////

Route::get('/login', [
    'uses' => 'AuthController@getLogin',
    'as' => 'login'
]);

Route::post('/login', [
    'uses' => 'AuthController@postLogin',
    'as' => 'login'
]);

Route::get('/logout',[
    'uses' => 'AuthController@getLogout',
    'as' => 'logout'
]);

Route::get('/register', [
    'uses' => 'AuthController@getRegister',
    'as' => 'register'
]);

Route::post('/register', [
    'uses' => 'AuthController@postRegister',
    'as' => 'register'
]);

////Admin routes////

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {

    Route::get('/dashboard', [
        'uses' => 'AdminController@getDashboard',
        'as' => 'admin.dashboard'
    ]);

    Route::get('/dashboard/blog/{post_id?}', [
        'uses' => 'AdminController@getBlog',
        'as' => 'admin.blog'
    ]);

    Route::post('/dashboard/blog/{post_id?}', [
        'uses' => 'AdminController@postBlog',
        'as' => 'admin.blog'
    ]);

    Route::get('/dashboard/gallery', [
        'uses' => 'AdminController@getGallery',
        'as' => 'admin.gallery'
    ]);

    Route::post('/dashboard/gallery', [
       'uses' => 'AdminController@postGallery',
        'as' => 'admin.gallery'
    ]);

    Route::get('/dashboard/courses/{course_id?}', [
        'uses' => 'AdminController@getCourses',
        'as' => 'admin.courses'
    ]);

});