@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form method="post" action="{{URL::to('/help')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Nume</label>
                                <input type="text" class="form-control" name="name"  placeholder="Enter name" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="email">
                                    Email </label>
                                <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" required="required" /></div>
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Subiect</label>
                                <input type="text" class="form-control" name="sub" placeholder="Enter subiect" required="required" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">
                                    Mesaj</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                      placeholder="Mesaj"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Trimite</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Adresa instituției</legend>
                <address>
                    <strong><h4>Colegiul Industrial-Pedagogic din Cahul</h4></strong>
                    <br>Republica Moldova,3901,Cahul,str.Dunării 36<br>


                    Telefon: 0299-4-15-30<br>
                    E-mail: <a href="mailto:#">cipc@cipc.info.md</a>
                    <p>Site:<a href="http://cipc.info.md">http://cipc.info.md</a></p>
                </address>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form  class="col-md-12">
                <legend> Alte informații</legend>
                <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.1164035019865!2d28.194360615289362!3d45.88898496301949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b65c87072498ef%3A0x1dd02e3ef510588c!2sStrada+Dun%C4%83rii+36%2C+Cahul+3901%2C+Moldova!5e0!3m2!1sro!2s!4v1464171834147"  height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </form>
        </div>

    </div>
    @endsection