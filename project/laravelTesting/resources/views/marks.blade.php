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
                    <h4 class="modal-title">{{ $subjectCode }}&nbsp&nbsp|&nbsp&nbsp Edit Grades</h4>
                </div>
                <div class="modal-body">

                    <form method="POST" action="/saveMarks/{{ $subjectCode }}">
                        {{ csrf_field() }}
                        <table class="table table-condensed table-hover table-responsive table-fix">
                            <thead>
                                <tr>
                                    <th hidden="true">id</th>
                                    <th width="18%">ID No.</th>
                                    <th width="18%">Course</th>
                                    <th width="25%">Name</th>
                                    <th width="17%">Midterm</th>
                                    <th width="17%">Final</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $students as $student)
                                    <tr>
                                        <td hidden="true">{{ $student->id }}</td>
                                        <td hidden="true">
                                            <input type="text" name="midterm" value="midterm" hidden>
                                            <input type="text" name="final" value="final" hidden>
                                        </td>
                                        <td>{{ $student->idnum }}</td>
                                        <td>{{ $student->course }} {{ $student->year }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td><div class="col-xs-10" ><input type="number" class="form-control input-sm" min="0" max="100" name="{{ $student->id }}_midterm" value="{{ $student->midterm }}"/></div></td>
                                        <td><div class="col-xs-10" ><input type="number" class="form-control input-sm" min="0" max="100" name="{{ $student->id }}_final" value="{{ $student->final }}"/></div></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                <div class="modal-footer">
                        <button class="btn btn-primary pull-right">Save</button>
                </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="/adminSuccessful"><button class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;Admin Home</button></a>

            <button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#myModal">Edit Grades</button><br><br>
            
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $subjectCode }}</div>
                <div class="panel-body">
                    <table class="table table-condensed table-hover table-responsive">
                        <thead>
                            <tr>
                                <th hidden="true">id</th>
                                <th>ID No.</th>
                                <th>Course</th>
                                <th>Name</th>
                                <th>Midterm</th>
                                <th>Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $students as $student)
                            <tr>
                                <td hidden="true">{{ $student->id }}</td>
                                <td>{{ $student->idnum }}</td>
                                <td>{{ $student->course }} {{ $student->year }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->midterm }}</td>
                                <td>{{ $student->final }}</td>
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
