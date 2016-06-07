@extends('layouts.app')

<!-- Main Content -->
@section('content')

<div id="recoverbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Recupereaza parola</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="loginlink" href="{{ url('/login') }}" >Logare</a></div>
        </div>
        <div class="panel-body" >
            <form id="recoverform" class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}
                <div  id="loginlink" style="{{ $errors->has('email') ? ' ' : 'display:none' }}" class="alert alert-danger">
                    <p>Error:</p>
                    <span>{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Send Password Reset Link</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


</div>
@endsection