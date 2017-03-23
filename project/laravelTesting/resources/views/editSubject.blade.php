@extends('layouts.adminApp')

@section('title')
    <title>LVCC | Admin</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Subject</div>
                <div class="panel-body">
                    <form method="POST" action="/saveSubject">
                        {{ csrf_field() }}
                            <input type="text" name="id" value="{{ $subject->id }}" hidden="true"> 
                        <div class="col-xs-9 ">
                            <input type="text" class="form-control" name="subjectCode" value="{{ $subject->subjectCode }}" required="true"> 
                        </div>
                        <div class="col-xs-3">
                            <select name="year" class="form-control " required="true">
                                @if ( $subject->year == "1" )
                                    <option value="1" selected>1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
                                @elseif ( $subject->year == "2" )
                                    <option value="1">1st Year</option>
                                    <option value="2" selected>2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4">4th Year</option>
                                @elseif ( $subject->year == "3" )
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3" selected>3rd Year</option>
                                    <option value="4">4th Year</option>
                                @elseif ( $subject->year == "4" )
                                    <option value="1">1st Year</option>
                                    <option value="2">2nd Year</option>
                                    <option value="3">3rd Year</option>
                                    <option value="4" selected>4th Year</option>
                                @endif
                            </select>
                        </div><br><br>
                        <div class="col-xs-12 ">
                            <input type="text" name="subjectName" class="form-control" value="{{ $subject->subjectName }}" required="true">
                        </div><br><br><br>
                        <div class="col-xs-4">
                            Professor's Name:
                        </div><br>
                        <div class="col-xs-3">
                            <select name="maritalStatus" class="form-control " required="true">
                                @if ( $subject->maritalStatus == "Mr." )
                                    <option value="Ms.">Ms.</option>
                                    <option value="Mr." selected>Mr.</option>
                                @elseif ( $subject->maritalStatus == "Ms." )
                                    <option value="Ms." selected>Ms.</option>
                                    <option value="Mr.">Mr.</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-xs-4 ">
                            <input type="text" name="professorFname" class="form-control" value="{{ $subject->professorFname }}" required="true">
                        </div>
                        <div class="col-xs-5 ">
                            <input type="text" name="professorLname" class="form-control" value="{{ $subject->professorLname }}" required="true"><br>
                        </div><br><br>
                        <div class="col-xs-4 ">
                            <button type="submit" class="btn btn-default" name="SAVE">SAVE</button>
                        </div><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
