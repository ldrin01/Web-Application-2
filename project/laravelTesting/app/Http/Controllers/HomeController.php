<?php

namespace Laverdad\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
}
