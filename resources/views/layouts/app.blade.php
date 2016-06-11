<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ro"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

<nav class="navbar navbar-inverse navbar-fixed-top " >
    <div class="container">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{URL::to('/')}}" class="navbar-brend col-xs-offset-3 center-block"><img  src="{{URL::asset('img/logotip.png')}}" width="90px" heigth="60px" alt="Admitere_logo"></a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="{{URL::to('/')}}">Admitere</a></li>
                @if(Auth::check())
                    <li class=""><a href="{{URL::to('/data')}}">Adauga elev</a></li>
                @else
                    <li class=""><a href="{{URL::to('/register')}}">Inregistrare</a></li>
                @endif

                <li class=""><a href="{{URL::to('/show')}}">Arata</a></li>
                @if(Auth::check())
                    <li class=""><a href="{{URL::to('/logout')}}">Iesire</a></li>
                    @else
                <li class=""><a href="{{URL::to('/login')}}">Logare</a></li>
                    @endif


            </ul>
        </div>
</div>
</nav>
<div class="container fixed" style="margin-top:55px;">
    @yield('content')
</div>
<footer class="container panel">
    <div class="row">
        <hr>
        <div class="col-lg-12">
            <div class="col-md-8">

                <a href="{{URL::to('/')}}">Admitere</a> |
                @if(Auth::check())
                    <a href="{{URL::to('/data')}}">Adauga elev</a>
                @else
                    <a href="{{URL::to('/register')}}">Inregistrare</a>
                @endif
                    | <a href="{{URL::to('/show')}}">Arata</a> |
                @if(Auth::check())
                    <a href="{{URL::to('/logout')}}">Iesire</a>
                @else
                    <a href="{{URL::to('/login')}}">Logare</a>
                @endif
            </div>
            <div class="col-md-4">
                <p class="">© 2016 </p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatables.bootstrap.js') }}"></script>


<script src="{{URL::asset('js/main.js')}}"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>





