@extends('layouts.adminApp')

@section('title')
    <title>LVCC | Admin</title>
@endsection

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-0">
                <a href="/adminSuccessful"><button class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span>&nbsp;&nbsp;Admin Home</button></a>
        </div><br><br>

        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel-heading">Add Students to {{ $subjectCode }}</div>
                <div class="panel-body">

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">BAB &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'BAB')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/BAB/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BAB/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BAB/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BAB/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">BSA &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'BSA')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/BSA/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSA/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSA/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSA/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">BSAT &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'BSAT')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/BSAT/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSAT/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSAT/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSAT/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">BSIS &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'BSIS')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body" align="center">
                                <a href="/courseTable/{{ $subjectCode }}/BSIS/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSIS/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSIS/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSIS/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">BSSW &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'BSSW')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/BSSW/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSSW/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSSW/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/BSSW/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">OM &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'OM')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/OM/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/OM/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/OM/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/OM/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">ACT &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'ACT')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/ACT/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/ACT/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/ACT/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/ACT/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">MCT &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'MCT')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/MCT/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/MCT/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/MCT/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/MCT/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">NA &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'NA')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/NA/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/NA/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/NA/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/NA/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading">IC &nbsp;&nbsp;|&nbsp;&nbsp; 
                                <?php $count = 0;?>
                                @foreach ( $courses as $course)
                                    @if ( $course->course == 'IC')
                                        <?php $count++; ?>
                                    @endif
                                @endforeach<?php echo $count; ?> Students
                            </div>
                            <div class="panel-body">
                                <a href="/courseTable/{{ $subjectCode }}/IC/1"><button class="btn btn-info">&nbsp;1&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/IC/2"><button class="btn btn-info">&nbsp;2&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/IC/3"><button class="btn btn-info">&nbsp;3&nbsp;</button></a>
                                <a href="/courseTable/{{ $subjectCode }}/IC/4"><button class="btn btn-info">&nbsp;4&nbsp;</button></a>
                            </div> 
                        </div>
                    </div>


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
