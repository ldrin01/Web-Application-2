<?php

namespace Laverdad\Http\Controllers;

use Illuminate\Http\Request;
use Laverdad\Subjects;
use Laverdad\User;
use Laverdad\StudentSubjects;
use DB;

class SubjectsController extends Controller
{
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

        $subj = Subjects::where('subjectCode', $subjectCode)->select('subjectName')->first();
        \Session::flash('message_admin', $subj->subjectName.' was added.');
        return redirect('/adminSuccessful');
    }

    public function editSubject(Request $request, $id){
        $subject = Subjects::find($id);
        // echo $subject;
        return view('editSubject', compact('subject'));
    }

    public function saveSubject(Request $request){
        $id = $request->id;
        $subjectCode = $request->subjectCode;
        $subjectName = $request->subjectName;
        $year = $request->year;
        $maritalStatus = $request->maritalStatus;
        $professorFname = $request->professorFname;
        $professorLname = $request->professorLname;
        $temp = $subjectName;
        
        $subject = Subjects::find($id);
        $subject->subjectCode=$subjectCode;
        $subject->subjectName=$subjectName;
        $subject->year=$year;
        $subject->maritalStatus=$maritalStatus;
        $subject->professorFname=$professorFname;
        $subject->professorLname=$professorLname;

        $subject->save();
        
        $subj = Subjects::where('subjectCode', $subjectCode)->select('subjectName')->first();
        \Session::flash('message_admin', $subj->subjectName.' was saved.');
        return redirect('/adminSuccessful');
    }

    public function addStudents(Request $request, $subjectCode){
        $insides = DB::table('users')
            ->join('student_subjects', 'users.id', '=', 'student_subjects.userId')
            ->where('subjectCode', $subjectCode)
            ->select('student_subjects.id', 'course', 'year', 'name')->get();

        $existing = DB::table('student_subjects')
            ->where('subjectCode', $subjectCode)
            ->pluck('userId');
        $courses = DB::table('users')
            ->whereNotIn('id', $existing)
            ->select('name', 'course')->get();
        // echo $courses;
        return view('courseChoices', compact('subjectCode', 'insides', 'courses'));
    }

    public function courseTable(Request $request, $subjectCode, $course, $year){
        $existing = DB::table('student_subjects')
            ->where('subjectCode', $subjectCode)
            ->pluck('userId');
        $students = DB::table('users')
            ->where('course', $course)
            ->where('year', $year)
            ->whereNotIn('id', $existing)->get();
        $insides = DB::table('users')
            ->join('student_subjects', 'users.id', '=', 'student_subjects.userId')
            ->where('subjectCode', $subjectCode)
            ->select('student_subjects.id', 'course', 'year', 'name')->get();
            // echo $insides;
        return view('courseTable', compact('students', 'subjectCode', 'course', 'year', 'insides'));
    }
}
