@extends('layouts.app')

@section('title')
    <title>LVCC | Profile</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>{{ Auth::user()->name }} &nbsp;&nbsp;|&nbsp;&nbsp; {{ Auth::user()->course }} {{ Auth::user()->year }}</h4>
                </div>

                <div class="panel-body">
                    <table class="table table-condensed table-hover table-responsive">
                        <thead>
                            <tr>
                                <th width="20%">Code</th>
                                <th width="30%">Subject Name</th>
                                <th width="30%">Professor</th>
                                <th width="10%">Midterm</th>
                                <th width="10%">Final</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $student as $a)
                            <tr>
                                <td>{{ $a->subjectCode }}</td>
                                <td>{{ $a->subjectName }}</td>
                                <td>{{ $a->maritalStatus }} {{ $a->professorFname }} {{ $a->professorLname }}</td>
                                <td>{{ $a->midterm }}</td>
                                <td>{{ $a->final }}</td>
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
