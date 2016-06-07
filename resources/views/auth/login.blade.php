@extends('layouts.app')

@section('content')
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Logare</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="{{ url('/password/reset') }}" >Ai uitat parola?</a></div>
        </div>

        <div style="padding-top:30px" class="panel-body" >



            <form id="loginform" class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

                <div style="{{ $errors->has('email') ? ' ' : 'display:none' }}" id="login-alert" class="alert alert-danger col-sm-12">{{$errors->first('email')}}</div>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="login-username" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email ">
                </div>

                <div style="{{ $errors->has('password') ? ' ' : 'display:none' }}" id="login-alert" class="alert alert-danger col-sm-12">{{$errors->first('password')}}</div>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                </div>

                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember" > memoreaza
                        </label>
                    </div>
                </div>


                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button type="submit" id="btn-login" class="btn btn-success">
                        Login
                        </button>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Nu ai un cont!
                            <a href="{{ url('/register') }}" >
                                Inregistreaza-te aici!
                            </a>
                        </div>
                    </div>
                </div>
            </form>



        </div>
    </div>
</div>
@endsection