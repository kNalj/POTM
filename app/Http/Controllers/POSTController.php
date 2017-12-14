<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \App\Post;
use \App\Media;
use \App\Course;
use \App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class POSTController extends Controller
{
    public function postSignupForm(Request $request) {

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'birthDate' => 'required|date'
        ]);


        $user = Auth::user();
        $course = Course::where('id', Input::get('course'))->first();

        $user->courses()->syncWithoutDetaching([$course->id]);
        //spremanje podataka u pivot tablicu


        return redirect()->route('home')->with(['success' => 'Uspjesna prijava !']);
    }

    public function postMessage(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $myemail = 'drmishello@hotmail.com';
        $name = strip_tags($request['name']);
        $email = strip_tags($request['email']);
        $message = strip_tags($request['message']);

        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
            " Here are the details:\n Name: $name \n ".
            "Email: $email\n Message \n $message";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);

        return redirect()->route('contact')->with(['success' => 'Message sent !']);
    }

    public function postComment(Request $request) {

        }
    }
