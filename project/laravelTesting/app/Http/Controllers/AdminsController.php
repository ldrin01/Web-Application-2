<?php

namespace Laverdad\Http\Controllers;

use Illuminate\Http\Request;
use Laverdad\Admins;
use Laverdad\Subjects;
use DB;

class AdminsController extends Controller
{
    public function adminLogin(Request $request){
        $validate = Admins::where('login', 1)->get();
        if ($validate == "[]") {
            return view('adminLogin');
        }else{
            return redirect('/adminSuccessful');
        }
    }

    public function adminSuccessful(Request $request){
        $validate = Admins::where('login', 1)->get();
        if ($validate == "[]") {
            \Session::flash('message_error', 'You must first login before to proceed! ');
            return redirect('/adminLogin');
        }else{
            $subjects = Subjects::all();
            $existings = DB::table('student_subjects')
                ->select('subjectCode')->get();
            return view('adminHome', compact('subjects', 'existings'));
        }
    }

    public function adminAuth(Request $request){
        $validate = Admins::where('login', 1)->get();
        if ($validate == "[]") {
            $username = $request->username;
            $password = $request->password;

            $admin = Admins::all()->where('username', $username)->where('password', $password)->first();
            if ($admin == null) {
                \Session::flash('message_error', 'Username and Password doesn\'t match!');
                return redirect('/adminLogin');
            }else{
		        $admin = Admins::all()->where('login', 0)->first();
		        $admin->login=1;
		        $admin->save();
                \Session::flash('message_admin', 'Welcome to LVCC website, Admin!');
                return redirect('/adminSuccessful');
            }
        }else{
            return redirect('/adminSuccessful');
        }
    }

    public function adminLogout(Request $request){
        \Session::flash('message_admin', 'You are now logged out.');
        $admin = Admins::all()->where('login', 1)->first();
        $admin->login=0;
        $admin->save();
        return redirect('/adminLogin');
    }
}
