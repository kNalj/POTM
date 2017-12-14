<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use \App\Course;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{

    public function getLogin() {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->take(4)->get();


        return view('login', [
            'coursesActive' => $coursesActive
        ]);
    }

    public function postLogin(Request $request) {

        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            if(Auth::user()->role->description == "admin") {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->route('login')->with(['fail' => 'Wrong credentials']);
    }

    public function getRegister() {

        $coursesActive = Course::where('status', 'active')->orderBy('id', 'desc')->take(4)->get();

        return view('register', [
            'coursesActive' => $coursesActive
        ]);
    }

    public function postRegister(Request $request) {

        $this->validate($request, [
            'firstname' => 'required|max:40',
            'lastname' => 'required|max:40',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|same:repeat|max:255',
            'birthDate' => 'required|date',
            'repeat' => 'required'
        ]);

        $user = new User();
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->email = Input::get('email');
        $user->password = bcrypt(Input::get('password'));
        $user->birthDate = Input::get('birthDate');
        $user->save();

        return redirect()->route('home');
    }

    public function getLogout() {

            Auth::logout();
            return redirect()->route('home')->with(['success' => 'I release you !']);
    }
}
