<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Subjects;

class StudentsController extends Controller
{
    // Admin
    public function admin(Request $request){
        return view('log-in-admin', [
            'message'=>''
        ]);
    }
    public function adminHomePage(Request $request){
        $subjects = Subjects::all();
        return view('admin-home-page', compact('subjects'), [
            'message'=>''
        ]);
    }
    public function loginAdmin(Request $request){
        $username = $request->username;
        $password = $request->password;
        if($username == "admin" && $password == "admin"){
            return redirect('/adminHomePage');
        }else{
            return view('log-in-admin', [
                'message'=>'Username and Password do not match!'
            ]);
        }
    }

    // Students
    public function start(Request $request){
        $login = Students::all()->where('login', 1);
        if($login == "[]"){
            return view('log-in', [
                'message'=>''
            ]);
        }else{
            return redirect('/welcome');
        }
        
    }
    public function signupSuccess(Request $request){
        return view('log-in', [
            'message'=>'You have succesfully signed up! :)'
        ]);
    }
    public function homePage(Request $request){
        $student = Students::all()->where('login', 1);
        if($student == "[]"){
            return view('log-in', [
                'message'=>'Account does not exist!'
            ]);
        }else{
            return view('home-page', compact('student'));
        }
    }
    public function signupStudent(Request $request){
    	$idnum = $request->idnum;
    	$fname = $request->fname;
    	$lname = $request->lname;
        $year = $request->year;
    	$course = $request->course;
        $password = $request->password;
    	$login = $request->login;

    	$student = new Students;
    	$student->idnum=$idnum;
    	$student->fname=$fname;
    	$student->lname=$lname;
        $student->year=$year;
    	$student->course=$course;
        $student->password=$password;
    	$student->login=$login;

    	$student->save();

    	return redirect('/welcome');
    }
    public function loginStudent(Request $request){
        $idnum = $request->idnum;
        $password = $request->password;
        $login = $request->login;
        $student = Students::all()->where('idnum', $idnum)->where('password', $password)->first();
        $student->login=$login;
        $student->save();
        echo $student;
        if($student == "[]"){
            return view('log-in', [
                'message'=>'Account does not exist!'
            ]);
        }else{
            return redirect('/welcome');
        }
    }
    public function logoutStudent(Request $request){
        $login = $request->login;
        $student = Students::all()->where('login', 1)->first();
        $student->login=$login;
        $student->save();
        
        return redirect('/start');""
    }

    // Subject
    public function registerSubjectSuccess(Request $request){
        $subjects = Subjects::all();
        return view('admin-home-page', compact('subjects'), [
            'message'=>'Subject was registered.'
        ]);
    }
    public function registerSubject(Request $request){
        $subjectCode = $request->subjectCode;
        $subjectName = $request->subjectName;
        $year = $request->year;
        $maritalStatus = $request->maritalStatus;
        $professorFname = $request->professorFname;
        $professorLname = $request->professorLname;
        $temp = $subjectName;
        
        $subject = new Subjects;
        $subject->subjectCode=$subjectCode;
        $subject->subjectName=$subjectName;
        $subject->year=$year;
        $subject->maritalStatus=$maritalStatus;
        $subject->professorFname=$professorFname;
        $subject->professorLname=$professorLname;

        $subject->save();

        return redirect('/registerSubjectSuccess');
    }
    public function editSubject(Request $request, $id){
        $subject = Subjects::all()->where('id', $id);
        return view('edit-subject', compact('subject'));
    }
    public function saveEditedSubject(Request $request){
        $id = $request->id;
        $subjectCode = $request->subjectCode;
        $subjectName = $request->subjectName;
        $year = $request->year;
        $maritalStatus = $request->maritalStatus;
        $professorFname = $request->professorFname;
        $professorLname = $request->professorLname;
        $temp = $subjectName;
        echo $id;

        $subject = Subjects::all()->where('id', $id)->first();
        $subject->subjectCode=$subjectCode;
        $subject->subjectName=$subjectName;
        $subject->year=$year;
        $subject->maritalStatus=$maritalStatus;
        $subject->professorFname=$professorFname;
        $subject->professorLname=$professorLname;

        $subject->save();

        return redirect('/adminHomePage');
    }
}