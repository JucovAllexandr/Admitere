@extends('layouts.app')

@section('content')
    <div  id="top"class="jumbotron">

        <h1>Sistem Informatic pentru institutie de invatamint 2016</h1>

        <p><a class="btn  btn-lg    btn-success col-lg-offset-5"
              @if(Auth::check())
              href="{{URL::to('/data')}}"
              role="button">Datele mele</a></p>
              @else
              href="{{URL::to('/register')}}"
              role="button">Inscrie-te acum!</a></p>
              @endif



    </div>
@endsection
