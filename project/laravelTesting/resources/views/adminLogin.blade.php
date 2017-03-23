@extends('layouts.app')

@section('title')
    <title>LVCC | Login</title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Admin</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminAuth') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="username" class="col-md-3 control-label">Username</label>

                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control" name="username" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-9">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>

                        <input id="login" type="number" name="login" value="1" hidden>
                    </form>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection
