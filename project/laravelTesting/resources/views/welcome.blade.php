@extends('layouts.app')

@section('title')
    <title>La Verdad Christian College</title>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="1.png" alt="Chania">
                </div>

                <div class="item">
                  <img src="1a.png" alt="Chania">
                </div>

                <div class="item">
                  <img src="5.png" alt="Flower">
                </div>

                <div class="item">
                  <img src="5a.png" alt="Flower">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            

            <div class="panel panel-default">
            <ul class="list-group">
              <li class="list-group-item"><span class="badge">12</span> New</li>
              <li class="list-group-item"><span class="badge">5</span> Deleted</li> 
              <li class="list-group-item"><span class="badge">3</span> Warnings</li> 
            </ul>
            </div>
    </div>
</div>
@endsection