@extends('layouts.app')

@section('content')
    <div id="signupbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Inregistrare</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="{{ url('/login') }}" >Logare</a></div>
            </div>
            <div class="panel-body" >
                <form id="signupform" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    {{--<div id="signupalert" style="" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>--}}

                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" placeholder="Username" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div id="signupalert" style="{{ $errors->has('name') ? ' ' : 'display:none' }}" class="alert alert-danger">
                        <p>Error:</p>
                        <span>{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div id="signupalert" style="{{ $errors->has('email') ? ' ' : 'display:none' }}" class="alert alert-danger">
                        <p>Error:</p>
                        <span>{{ $errors->first('email') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div id="signupalert" style="{{ $errors->has('password') ? ' ' : 'display:none' }}" class="alert alert-danger">
                        <p>Error:</p>
                        <span>{{ $errors->first('password') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="rpassword" class="col-md-3 control-label"> Repeat password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password_confirmation" placeholder=" Repeat assword">
                        </div>
                    </div>

                    <div id="signupalert" style="{{ $errors->has('password_confirmation') ? ' ' : 'display:none' }}" class="alert alert-danger">
                        <p>Error:</p>
                        <span>{{ $errors->first('password_confirmation') }}</span>
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Creare</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection