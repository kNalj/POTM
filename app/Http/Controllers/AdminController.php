<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Course;
use \App\Media;
use \App\postContent;
use \App\courseComment;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function getDashboard() {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();


        return view('admin.dashboard', [
            'coursesActive' => $coursesActive
        ]);
    }

    public function getBlog($post_id = null) {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();

        return view('admin.blog', [
            'coursesActive' => $coursesActive
        ]);
    }

    public function postBlog(Request $request) {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('img/post'), $imageName);

        $img = new Media();
        $img->path = "img/post/".$imageName;
        $img->pathToThumb = "img/post/".$imageName;
        $img->isPartOfGallery = 0;
        $img->post_id = 0;
        $img->save();

        $post = new Post();
        $post->title = $request->title;
        $post->teaser = $request->teaser;
        $post->user_id = Auth::user()->id;
        $post->media_id = $img->id;
        $post->save();

        $pc = new postContent();
        $pc->post_id = $post->id;
        $pc->content = $request['content'];
        $pc->save();

        $img->post_id = $post->id;
        $img->save();

        return redirect()->route('admin.blog');
    }

    public function getGallery() {
        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();

        $images = Media::All();

        return view('admin.gallery', [
            'coursesActive' => $coursesActive,
            'images' => $images
        ]);
    }

    public function postGallery(Request $request) {

        $deleteq = $request['delete'];
        foreach ($deleteq as $deleteitem) {
            $media = Media::where('id', $deleteitem);
            $media->delete();
        }

        return redirect()->route('admin.gallery');
    }

    public function getCourses($course_id = null) {
        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->get();

        if ($course_id != null) {
            $selectedCourse = Course::where('id', $course_id)->first();
            $comments = courseComment::where('course_id', $selectedCourse->id)->get();
        } else {
            $selectedCourse = null;
            $comments = null;
        }

        return view('admin.courses', [
            'coursesActive' => $coursesActive,
            'selectedCourse' => $selectedCourse,
            'comments' => $comments
        ]);
    }

    public function postCourse(Request $request) {

        return view('admin.courses');
    }
}
