<?php

namespace Laverdad\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Laverdad\Admins;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'direct1']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $userId = Auth::user()->id;
        // echo $userId;

        $student = DB::table('student_subjects')
            ->join('subjects', 'student_subjects.subjectCode', '=', 'subjects.subjectCode')
            ->where('userId', $userId)
            ->select('subjectName','subjects.subjectCode', 'midterm', 'final', 'maritalStatus', 'professorFname', 'professorLname')->get();

        // echo $student;
        return view('home', compact('student'));
    }
    public function direct1(Request $request){
        $validate = Admins::all();
        if ($validate == "[]") {
            $validate = new Admins;
            $validate->username = 'admin';
            $validate->password = 'admin';
            $validate->login = '0';
            $validate->save();
            return view('welcome');
        }else{
            return view('welcome');
        }
    }
    public function direct2(Request $request){
        $validate = Admins::all();
        if ($validate == "[]") {
            $validate = new Admins;
            $validate->username = 'admin';
            $validate->password = 'admin';
            $validate->login = '1';
            $validate->save();
            return view('welcome');
        }else{
            return view('welcome');
        }
    }
}
