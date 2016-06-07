@extends('layouts.app')

@section('content')
    <div  id="top"class="jumbotron">

        <h1>Admitere 2016</h1>
        <p  >This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.(<a href="#">Docs/PDF</a>)</p>
        <hr>
        <p >This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.(<a href="#">Docs/PDF</a>)</p>

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
