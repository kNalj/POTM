<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Post;
use \App\Media;
use \App\Course;
use \App\User;
use \App\postComment;
use \App\courseComment;
use Illuminate\Support\Facades\Input;

class BaseController extends Controller
{
    public function getHome() {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();
        $galleryThumbs = Media::where('isPartOfGallery', 1)->orderBy('id', 'desc')->get();
        $postsLatest = Post::orderBy('id', 'desc')->take(4)->get();

        return view('home', [
            'coursesActive' => $coursesActive,
            'postsLatest' => $postsLatest,
            'galleryThumbs' => $galleryThumbs
        ]);
    }

    public function getGallery() {

        $images = Media::where('isPartOfGallery', 1)->orderBy('id', 'desc')->get();
        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();


        return view('gallery', [
            'images' => $images,
            'coursesActive' => $coursesActive
        ]);
    }

    public function getBlog($post_id = null) {

        $posts = Post::orderBy('id', 'desc')->take(4)->get();
        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();

        $month = date('m');
        $year = date('Y');

        if ($post_id != null) {
            $selectedPost = Post::where('id', $post_id)->first();
            $comments = postComment::where('post_id', $selectedPost->id)->get();
        } else {
            $selectedPost = null;
            $comments = null;
        }

        return view('blog', [
            'posts' => $posts,
            'coursesActive' => $coursesActive,
            'month' => $month,
            'year' => $year,
            'selectedPost' => $selectedPost,
            'comments' => $comments
        ]);
    }

    public function getContact() {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();

        return view('contact', [
            'coursesActive' => $coursesActive
        ]);
    }

    public function getCourses($course_id = null) {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();
        $coursesOld = Course::where('status', '!=', 'active')->orderBy('id', 'desc')->get();


        if ($course_id != null) {
            $selectedCourse = Course::where('id', $course_id)->first();
            $comments = courseComment::where('course_id', $selectedCourse->id)->get();
        } else {
            $selectedCourse = null;
            $comments = null;
        }

        return view('courses', [
            'coursesActive' => $coursesActive,
            'coursesOld' => $coursesOld,
            'selectedCourse' => $selectedCourse,
            'comments' => $comments
        ]);
    }

    public function getSignupForm($course_id = null) {

        //triba filtrirat one koji imaju manje od 12 ljudi
        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();

        if ($course_id != null) {
            $selectedCourse = Course::where('id', $course_id)->first();
        } else {
            $selectedCourse = null;
        }

        return view('signup', [
            'coursesActive' => $coursesActive,
            'selectedCourse' => $selectedCourse
        ]);
    }
}