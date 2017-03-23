@extends('layouts.adminApp')

@section('title')
    <title>LVCC | Admin</title>
@endsection

@section('content')
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Subject Informations</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/registerSubject">
                        {{ csrf_field() }}
                        <div class="col-xs-9 ">
                            <input type="text" class="form-control" name="subjectCode" placeholder="Subject Code" required="true"> 
                        </div>
                        <div class="col-xs-3">
                            <select name="year" class="form-control " required="true">
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                        </div><br><br>
                        <div class="col-xs-12 ">
                            <input type="text" name="subjectName" class="form-control" placeholder="Subject Name" required="true">
                        </div><br><br><br>
                        <div class="col-xs-4">
                            Professor's Name:
                        </div><br>
                        <div class="col-xs-3">
                            <select name="maritalStatus" class="form-control " required="true">
                                <option value="Ms.">Ms.</option>
                                <option value="Mr.">Mr.</option>
                            </select>
                        </div>
                        <div class="col-xs-4 ">
                            <input type="text" name="professorFname" class="form-control" placeholder="First Name" required="true">
                        </div>
                        <div class="col-xs-5 ">
                            <input type="text" name="professorLname" class="form-control" placeholder="Last Name" required="true"><br>
                        </div><br><br>
                        <div class="col-xs-4 ">
                            <button type="submit" class="btn btn-default" name="REGISTER">REGISTER</button>
                        </div><br><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Subject</button><br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">Subjects</div>
                <div class="panel-body">
                    <table class="table table-condensed table-hover table-responsive">
                        <thead>
                            <tr>
                                <th hidden="true">id</th>
                                <th width="19%">Code</th>
                                <th width="25%">Subject Name</th>
                                <th width="6%">Year</th>
                                <th width="10%">Students</th>
                                <th width="31%">Professor</th>
                                <th width="10%">Marks</th>
                                <th width="19%">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $subjects as $subject)
                            <tr>
                                <td hidden="true">{{ $subject->id }}</td>
                                <td>{{ $subject->subjectCode }}</td>
                                <td>{{ $subject->subjectName }}</td>
                                <td>{{ $subject->year }}<?php
                                        if( $subject->year == 1 ){
                                            echo "st";
                                        }elseif ( $subject->year == 2 ) {
                                            echo "nd";
                                        }elseif ( $subject->year == 3 ) {
                                            echo "rd";
                                        }else{
                                            echo "th";
                                        }
                                    ?></td>

                                <?php $count = 0; ?>
                                <td align="center">@foreach ( $existings as $existing )
                                    @if ( $existing->subjectCode == $subject->subjectCode )
                                        <?php $count++; ?>
                                    @endif
                                @endforeach
                                {{ $count }}
                                </td>

                                <td>{{ $subject->maritalStatus }} {{ $subject->professorFname }} {{ $subject->professorLname }}</td>

                                <td>
                                    <?php $count = 0; ?>
                                    @foreach ( $existings as $existing )
                                        @if ( $existing->subjectCode == $subject->subjectCode )
                                            <?php $count++; ?>
                                        @endif
                                    @endforeach
                                        @if ( $count == 0)
                                            <a href="/marks/{{ $subject->subjectCode }}"><button class="btn btn-info" disabled>Open</button></a>
                                        @else
                                            <a href="/marks/{{ $subject->subjectCode }}"><button class="btn btn-primary">Open</button></a>
                                        @endif
                                </td>
                                <td>
                                    <!-- <a href="/editSubject/{{ $subject->id }}"><button class="btn btn-primary">Edit</button></a> -->
                                    <a href="/addStudents/{{ $subject->subjectCode }}"><button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></span> Add Student</button></a>
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
