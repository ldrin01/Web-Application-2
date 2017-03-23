<?php

namespace Laverdad\Http\Controllers;

use Illuminate\Http\Request;
use Laverdad\StudentSubjects;
use DB;

class StudentSubjectsController extends Controller
{
    public function addStudentSubject(Request $request, $subjectCode, $userId){
        // echo $subjectCode, $course, $year, $userId;
        $StudentSubject = new StudentSubjects;
        $StudentSubject->userId=$userId;
        $StudentSubject->subjectCode=$subjectCode;
        $StudentSubject->midterm=0;
        $StudentSubject->final=0;
        $StudentSubject->save();
        return back();
        // return redirect('/courseTable'.'/'.$subjectCode.'/'.$course.'/'.$year);
    }
    public function removeStudent(Request $request, $id, $subjectCode){
    	$student = StudentSubjects::find($id);
    	$student->delete();
    	

        $insides = DB::table('users')
            ->join('student_subjects', 'users.id', '=', 'student_subjects.userId')
            ->where('subjectCode', $subjectCode)
            ->select('student_subjects.id', 'course', 'name')->get();

        $existing = DB::table('student_subjects')
            ->pluck('userId');
        $courses = DB::table('users')
            ->whereNotIn('id', $existing)
            ->select('name', 'course')->get();
        // echo $courses;
        // return view('courseChoices', compact('subjectCode', 'insides', 'courses'));
            return back();
    }
    public function marks(Request $request, $subjectCode){
        $students = DB::table('users')
            ->join('student_subjects', 'users.id', '=', 'student_subjects.userId')
            ->where('subjectCode', $subjectCode)
            ->select('student_subjects.id', 'users.idnum', 'course', 'year', 'name', 'midterm', 'final')->get();
        // echo $students;
        return view('marks', compact('students', 'subjectCode'));
        // $count = DB::table('users')
        //     ->join('student_subjects', 'users.id', '=', 'student_subjects.userId')
        //     ->where('subjectCode', $subjectCode)->count();
        
        // for ($i=1; $i <= $count ; $i++) { 
        //     echo $eldrin;
        // }
        // $term = $request->term;
        // $name = $subjectCode.'_'.$term;
        // $a = $request->$name;
        // echo $a;
    }
    public function saveMarks(Request $request, $subjectCode){
        $students = DB::table('users')
            ->join('student_subjects', 'users.id', '=', 'student_subjects.userId')
            ->where('subjectCode', $subjectCode)
            ->select('student_subjects.id', 'users.idnum', 'course', 'year', 'name', 'midterm', 'final')->get();
        // echo $students;

        $term = $request->midterm;
        foreach ($students as $student) {
            $theID = $student->id;
            $name = $theID.'_'.$term;
            
            $theGrade = $request->$name;

            $student = StudentSubjects::find($theID);
            $student->midterm=$theGrade;
            $student->save();
        }

        $term = $request->final;
        foreach ($students as $student) {
            $theID = $student->id;
            $name = $theID.'_'.$term;
            
            $theGrade = $request->$name;

            $student = StudentSubjects::find($theID);
            $student->final=$theGrade;
            $student->save();
        }
        return back();
    }
}
