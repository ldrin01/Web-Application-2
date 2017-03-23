@extends('layouts.adminApp')

@section('title')
    <title>LVCC | Admin</title>
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-0">
                <a href="/adminSuccessful"><button class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;Admin Home</button></a> 
                &nbsp;<a href="/addStudents/{{ $subjectCode }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;Courses</button></a>


                <div class="btn-group pull-right">
                    @if ( $year != 1)
                        <button class="btn btn-primary"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/1" style="text-decoration: none; color: white;">{{  $course }} 1</a></button>
                    @else
                        <button class="btn btn-default"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/1" style="text-decoration: none; color: #636b69;">{{  $course }} 1</a></button>
                    @endif
                    @if ( $year != 2)
                        <button class="btn btn-primary"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/2" style="text-decoration: none; color: white;">{{  $course }} 2</a></button>
                    @else
                        <button class="btn btn-default"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/1" style="text-decoration: none; color: #636b69;">{{  $course }} 2</a></button>
                    @endif
                    @if ( $year != 3)
                        <button class="btn btn-primary"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/3" style="text-decoration: none; color: white;">{{  $course }} 3</a></button>
                    @else
                        <button class="btn btn-default"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/1" style="text-decoration: none; color: #636b69;">{{  $course }} 3</a></button>
                    @endif
                    @if ( $year != 4)
                        <button class="btn btn-primary"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/4" style="text-decoration: none; color: white;">{{  $course }} 4</a></button>
                    @else
                        <button class="btn btn-default"><a href="/courseTable/{{ $subjectCode }}/{{ $course }}/1" style="text-decoration: none; color: #636b69;">{{  $course }} 4</a></button>
                    @endif
                </div>
        </div><br><br>

        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>{{ $course }} {{ $year }} &nbsp&nbsp|&nbsp&nbsp 
                    <?php $count = 0;?>
                    @foreach ( $students as $student)
                            @if ( $student->course == $course)
                                <?php $count++; ?>
                            @endif
                    @endforeach<?php echo $count; ?> Students
                </h4>
                                </div>
                <div class="panel-body">

                    <table class="table table-condensed table-hover table-responsive">
                        <thead>
                            <tr>
                                <th hidden>id</th>
                                <th>ID No.</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $students as $student)
                                <tr>
                                    <td hidden="true">{{ $student->id }}</td>
                                    <td>{{ $student->idnum }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->course }} {{ $student->year }}</td>
                                    <td align="center">
                                        <a href="/addStudentSubject/{{ $subjectCode }}/{{ $student->id }}" ><button class="btn btn-primary">Add</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> 
            </div>
        </div>

        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $subjectCode }} &nbsp&nbsp|&nbsp&nbsp 
                    <?php $count = 0;?>
                    @foreach ( $insides as $inside)
                                    <?php $count++; ?>
                    @endforeach<?php echo $count; ?> Students
                </div>
                <div class="panel-body">

                    <table class="table table-condensed table-hover table-responsive">
                        <thead>
                            <tr>
                                <th hidden>id</th>
                                <th>Course</th>
                                <th>Name</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $insides as $inside)
                                <?php $count++; ?>
                                <tr>
                                    <td hidden="true">{{ $inside->id }}</td>
                                    <td>{{ $inside->course }} {{ $inside->year }}</td>
                                    <td>{{ $inside->name }}</td>
                                    <td align="center">
                                        <a href="/removeStudent/{{ $inside->id }}/{{ $subjectCode }}" ><button class="btn btn-danger">Remove</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> 
            </div>
        </div>
        
    </div>
</div>
@endsection
