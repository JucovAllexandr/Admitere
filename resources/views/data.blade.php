@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title" id="top">Datele mele</h3>
                </div>
                <div class="panel-body">
                    <form class='form-horizontal' method="post" action="{{URL::to('/data')}}">
                        {{csrf_field()}}
                        <fieldset>
                            @foreach($errors->all() as $error)
                                <div id="indate" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span>{{$error}}</span>
                                </div>
                            @endforeach

                            <p class="alert alert-warning"><span class="glyphicon glyphicon-alert"></span> Datele
                                introduse NU pot fi modificata.Completati cu atentie datele!</p>
                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                @if($errors->first('specialitate1'))
                                        alert alert-danger
                                        @endif
                                        ">Selectati Optiunea 1</label>
                                <div class="col-md-2 ">
                                    <select id="specialitate1" name="specialitate1" class="form-control ">
                                        <option value="" id="o1-null">Null</option>
                                        <option value="1" id="o1-as_l">AS:lucrător social</option>
                                        <option value="2" id="o1-as_p">AS:pedagog social</option>
                                        <option value="3" id="o1-web">Administrarea aplicațiilor WEB</option>
                                        <option value="4" id="o1-prog">Programarea și analiza produselor de program
                                        </option>
                                        <option value="5" id="o1-retea">Rețele de calculatoare</option>
                                        <option value="6" id="o1-cor">Coregrafie</option>
                                        <option value="7" id="o1-eco">Ecologie și protecția mediului</option>
                                        <option value="8" id="o1-con">Contabilitate</option>
                                        <option value="9" id="o1-ii">Interpretare instrumentala</option>
                                        <option value="10" id="o1-pic">Pictura</option>
                                    </select>
                                </div>
                                <!--select-->
                                <div class="col-md-1">
                                    <div class="checkbox">
                                        <label
                                                @if($errors->first('bug1'))
                                                class=" alert alert-danger"
                                                @endif>
                                            <input type="checkbox" name="bug1" value="1"
                                                   @if(old('bug1')) checked @endif
                                            >
                                            Buget
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 checkbox">
                                    <label @if($errors->first('cont1'))
                                           class=" alert alert-danger"
                                            @endif>
                                        <input type="checkbox" name="cont1" value="1"
                                               @if(old('cont1')) checked @endif
                                        >
                                        Contract
                                    </label>

                                </div>
                                <label class="col-md-3 control-label
                                @if($errors->first('lib1'))d
                                        alert alert-danger
                                        @endif
                                        ">Limba de instruire Optiunea 1</label>
                                <div class="col-md-2 ">
                                    <select name="lib1" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                @if($errors->first('specialitate2'))
                                        alert alert-danger
                                        @endif
                                        ">Selectati Optiunea 2</label>
                                <div class="col-md-2 ">
                                    <select id="specialitate2" name="specialitate2" class="form-control">
                                        <option value="" id="o1-null">Null</option>
                                        <option value="1" id="o2-as_l">AS:lucrător social</option>
                                        <option value="2" id="o2-as_p">AS:pedagog social</option>
                                        <option value="3" id="o2-web">Administrarea aplicațiilor WEB</option>
                                        <option value="4" id="o2-prog">Programarea și analiza produselor de program
                                        </option>
                                        <option value="5" id="o2-retea">Rețele de calculatoare</option>
                                        <option value="6" id="o2-cor">Coregrafie</option>
                                        <option value="7" id="o2-eco">Ecologie și protecția mediului</option>
                                        <option value="8" id="o2-con">Contabilitate</option>
                                        <option value="9" id="o2-ii">Interpretare instrumentala</option>
                                        <option value="10" id="o2-pic">Pictura</option>
                                    </select>
                                </div>
                                <!--select-->
                                <div class="col-md-1">
                                    <div class="checkbox">
                                        <label
                                                @if($errors->first('bug2'))
                                                class=" alert alert-danger"
                                                @endif
                                        >
                                            <input type="checkbox" name="bug2" value="1"
                                                   @if(old('bug2')) checked @endif
                                            >
                                            Buget
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 checkbox">
                                    <label
                                            @if($errors->first('cont2'))
                                            class=" alert alert-danger"
                                            @endif
                                    >
                                        <input type="checkbox" name="cont2" value="1"
                                               @if(old('cont2')) checked @endif
                                        >
                                        Contract
                                    </label>

                                </div>
                                <label class="col-md-3 control-label
                                @if($errors->first('lib2'))
                                        alert alert-danger
                                        @endif
                                        ">Limba de instruire Optiunea 2</label>
                                <div class="col-md-2 ">
                                    <select name="lib2" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                @if($errors->first('specialitate3'))
                                        alert alert-danger
                                        @endif
                                        ">Selectati Optiunea 3</label>
                                <div class="col-md-2 ">
                                    <select id="specialitate3" name="specialitate3" class="form-control">
                                        <option value="" id="o1-null">Null</option>
                                        <option value="1" id="o3-as_l">AS:lucrător social</option>
                                        <option value="2" id="o31-as_p">AS:pedagog social</option>
                                        <option value="3" id="o3-web">Administrarea aplicațiilor WEB</option>
                                        <option value="4" id="o3-prog">Programarea și analiza produselor de program
                                        </option>
                                        <option value="5" id="o3-retea">Rețele de calculatoare</option>
                                        <option value="6" id="o3-cor">Coregrafie</option>
                                        <option value="7" id="o3-eco">Ecologie și protecția mediului</option>
                                        <option value="8" id="o3-con">Contabilitate</option>
                                        <option value="9" id="o3-ii">Interpretare instrumentala</option>
                                        <option value="10" id="o3-pic">Pictura</option>
                                    </select>
                                </div>


                                <!--select-->
                                <div class="col-md-1">
                                    <div class="checkbox">
                                        <label
                                                @if($errors->first('bug3'))
                                                class=" alert alert-danger"
                                                @endif
                                        >
                                            <input type="checkbox" name="bug3" value="1"
                                                   @if(old('bug3')) checked @endif
                                            >
                                            Buget
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 checkbox">
                                    <label
                                            @if($errors->first('cont3'))
                                            class=" alert alert-danger"
                                            @endif

                                    >
                                        <input type="checkbox" name="cont3" value="1"
                                               @if(old('cont3')) checked @endif
                                        >
                                        Contract
                                    </label>

                                </div>
                                <label class="col-md-3 control-label
                                @if($errors->first('lib3'))
                                        alert alert-danger
                                        @endif
                                        ">Limba de instruire Optiunea 3</label>
                                <div class="col-md-2 ">
                                    <select name="lib3" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>

                                    </select>
                                </div>
                            </div>

                            <!--input_data-->
                            <div class="form-group">
                                <label class="col-md-1 control-label
                                 @if($errors->first('nume'))
                                        alert alert-danger
                                        @endif
                                        ">Nume</label>
                                <div class="col-md-2">
                                    <input name="nume" class="form-control" type="text"
                                           value="{{old('nume')}}" placeholder="nume">
                                </div>
                                <label class="col-md-1 control-label
                                 @if($errors->first('prenum'))
                                        alert alert-danger
                                        @endif
                                        ">Prenume</label>
                                <div class="col-md-3">
                                    <input name="prenum" class="form-control"
                                           value="{{old('prenum')}}" type="text" placeholder="prenume">

                                </div>
                                <label class="col-md-1 control-label
                                @if($errors->first('patronim'))
                                        alert alert-danger
                                        @endif
                                        ">Patronim</label>
                                <div class="col-md-3">
                                    <input name="patronim" class="form-control"
                                           value="{{old('patronim')}}" type="text" placeholder="patromim">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-1 control-label
                                @if($errors->first('sex'))
                                        alert alert-danger
                                        @endif
                                        " for="sex">Sexul</label>
                                <div class="col-md-2">
                                    <select id="sex" name="sex" class="form-control">
                                        <option value="1">masculin</option>
                                        <option value="2">femenin</option>
                                    </select>
                                </div>  <!--sexul-->
                                <label style="margin-right:10px;"  class="col-md-1 control-label
                                       @if($errors->first('natia'))
                                        alert alert-danger
                                         @endif
                                        ">Nationalitatea</label>
                                <div class="col-md-2">

                                    <select id="natia" name="natia" class="form-control">
                                        @foreach(\App\Nationality::orderBy('nationality')->get() as $n)
                                            @if($n->id == 115)
                                                <option value="{{$n->id}}" selected >{{ucfirst($n->nationality)}}</option>
                                            @else
                                                <option value="{{$n->id}}">{{ucfirst($n->nationality)}}</option>
                                            @endif
                                            @endforeach

                                    </select>
                                </div>

                                <!--natie-->

                                <label class="col-md-2 control-label
                                 @if($errors->first('data_nast'))
                                        alert alert-danger
                                         @endif
                                        ">Data nașterii:</label>
                                <div class="col-md-3">
                                    <input id="data_nasteri" name="data_nast" type="text" placeholder="zi.luna.an"
                                           value="{{old('data_nast')}}" class="form-control input-md">

                                </div>
                            </div>

<hr>
                            <div class="form-group">
                                <label class="col-md-1 control-label
                                @if($errors->first('raion'))
                                        alert alert-danger
                                         @endif
                                        "
                                >Raion:</label>
                                <div class="col-md-2">
                                    <input id="raion" name="raion" type="text" placeholder="raion"
                                           value="{{old('raion')}}" class="form-control input-md">
                                </div>

                                <div class="form-group">
                                    <label class="col-md-1 control-label
                                    @if($errors->first('sat_oras'))
                                            alert alert-danger
                                             @endif
                                            " >Sat/Oraș</label>
                                    <div class="col-md-2">
                                        <select id="sat_oras" name="sat_oras" class="form-control">
                                            <option value="1">Sat</option>
                                            <option value="2">Oraș</option>
                                        </select>
                                    </div>

                                    <label class="col-md-2 control-label
                                        @if($errors->first('num_sat_oras'))
                                            alert alert-danger
                                             @endif
                                            " >Nume (sat/oras):</label>
                                    <div class="col-md-3">
                                        <input  name="num_sat_oras" type="text" placeholder="Nume (sat/oras)"
                                               value="{{old('num_sat_oras')}}" class="form-control input-md  ">
                                    </div>

                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-md-1 control-label
                                        @if($errors->first('strada'))
                                            alert alert-danger
                                             @endif
                                            " >Strada:</label>
                                    <div class="col-md-3">
                                        <input  name="strada" type="text" placeholder="Strada"
                                                value="{{old('strada')}}" class="form-control input-md  ">
                                    </div>

                                    <label class="col-md-2 control-label
                                        @if($errors->first('nr_bloc'))
                                            alert alert-danger
                                             @endif
                                            " >Nr bloc/apartament:</label>
                                    <div class="col-md-3">
                                        <input  name="nr_bloc" type="text" placeholder="Numar"
                                                value="{{old('nr_bloc')}}" class="form-control input-md  ">
                                    </div>
                                </div>
                                <hr>
                            <div class="form-group">
                                <label class="col-md-1 control-label
                                 @if($errors->first('telefon'))
                                        alert alert-danger
                                         @endif
                                        " for="telefon">Telefon:</label>
                                <div class="col-md-2">
                                    <input name="telefon" type="text" placeholder="telefon"
                                           value="{{old('telefon')}}" class="form-control input-md">

                                </div>
                                <label class="col-md-1 control-label
                                @if($errors->first('mobi'))
                                        alert alert-danger
                                         @endif
                                        " for="mob">Mobil:</label>
                                <div class="col-md-3">
                                    <input name="mobi" type="text" placeholder="mobil"
                                           value="{{old('mobi')}}" class="form-control input-md">

                                </div>
                                <label class="col-md-2 control-label
                                @if($errors->first('email'))
                                        alert alert-danger
                                         @endif
                                        " for="email">E-mail:</label>
                                <div class="col-md-3">
                                    <input name="email" type="email" placeholder="e-mail"
                                           value="{{old('email')}}" class="form-control input-md">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Certificat de naștere</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label
                                 @if($errors->first('seria1'))
                                        alert alert-danger
                                         @endif
                                        ">Seria Nr.</label>
                                <div class="col-md-2">
                                    <input type="text" name="seria1"
                                           value="{{old('seria1')}}"
                                           class="form-control input-md" placeholder="seria">
                                </div>

                                <label class="col-md-1 control-label
                                @if($errors->first('dat_elib'))
                                        alert alert-danger
                                         @endif
                                        ">Eliberat</label>
                                <div class="col-md-2">
                                    <input type="text" name="dat_elib" class="form-control input-md"
                                           value="{{old('dat_elib')}}" placeholder="zi.luna.an">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Buletin de identitate al candidatului</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label
                                @if($errors->first('seria2'))
                                        alert alert-danger
                                         @endif
                                        ">Seria </label>
                                <div class="col-md-1">
                                    <input type="text" name="seria2"
                                           value="{{old('seria2')}}"
                                           class="form-control input-md" placeholder="seria">
                                </div>

                                <label class="col-md-1 control-label
                                 @if($errors->first('nr'))
                                        alert alert-danger
                                         @endif
                                        ">Nr.</label>
                                <div class="col-md-2">
                                    <input type="text" name="nr"
                                           value="{{old('nr')}}"
                                           class="form-control input-md" placeholder="Numar">
                                </div>
                                <label class="col-md-2 control-label
                                 @if($errors->first('oficiu'))
                                        alert alert-danger
                                         @endif
                                        ">Eliberat de oficiul</label>
                                <div class="col-md-2">
                                    <input type="text" name="oficiu"
                                           value="{{old('oficiu')}}"
                                           class="form-control input-md" placeholder="Oficiu">
                                </div>
                                <label class="col-md-1 control-label
                                @if($errors->first('dat_elib2'))
                                        alert alert-danger
                                         @endif
                                        ">Data eliberari</label>
                                <div class="col-md-2">
                                    <input type="text" name="dat_elib2" class="form-control input-md"
                                           value="{{old('dat_elib2')}}"
                                           placeholder="zi.luna.an">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label
                                @if($errors->first('cod_pers'))
                                        alert alert-danger
                                         @endif
                                        ">Codul personal</label>
                                <div class="col-md-3">
                                    <input name="cod_pers"
                                           value="{{old('cod_pers')}}"
                                           type="text" class="form-control input-md" placeholder="Codul personal ">
                                </div>
                                <label class="col-md-2 control-label
                                @if($errors->first('tara'))
                                        alert alert-danger
                                         @endif
                                        ">Cetatenie</label>
                                <div class="col-md-2">
                                    <select name="cetatanie" class="form-control">
                                        <option value="1">MD</option>
                                        <option value="2">RO</option>
                                        <option value="3">RU</option>
                                        <option value="4">UA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3  control-label"> Numele și prenumele părinților</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label"> Tatăl</label>
                                <label class="col-md-1 control-label
                                @if($errors->first('tnume'))
                                        alert alert-danger
                                         @endif
                                        "> Nume</label>
                                <div class="col-md-2">
                                    <input class="form-control"
                                           value="{{old('tnume')}}"
                                           type="text" name="tnume" placeholder="nume">
                                </div>
                                <label class="col-md-1 control-label
                                @if($errors->first('tprenume'))
                                        alert alert-danger
                                         @endif
                                        ">Prenume</label>
                                <div class="col-md-3">
                                    <input class="form-control"
                                           value="{{old('tprenume')}}"
                                           type="text" name="tprenume" placeholder="prenume">

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label"> Mama</label>
                                <label class="col-md-1 control-label
                                @if($errors->first('mnume'))
                                        alert alert-danger
                                         @endif
                                        "> Nume</label>
                                <div class="col-md-2">
                                    <input class="form-control"
                                           value="{{old('mnume')}}"
                                           type="text" name="mnume" placeholder="nume">
                                </div>
                                <label class="col-md-1 control-label
                                @if($errors->first('mprenume'))
                                        alert alert-danger
                                         @endif
                                        ">Prenume</label>
                                <div class="col-md-3">
                                    <input class="form-control"
                                           value="{{old('mprenume')}}"
                                           type="text" name="mprenume" placeholder="prenume">

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label
                                @if($errors->first('instit_abs'))
                                        alert alert-danger
                                         @endif
                                        ">Instituția de învatămant absolvită</label>
                                <div class="col-md-6">
                                    <input name="instit_abs" type="text"
                                           value="{{old('instit_abs')}}"
                                           placeholder="instituția absolvită" class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label
                                 @if($errors->first('anab'))
                                        alert alert-danger
                                         @endif
                                        ">Anul absolvirii</label>
                                <div class="col-md-1">
                                    <input name="anab" type="text" placeholder="an"
                                           value="{{old('anab')}}"
                                           class="form-control input-md">
                                </div>
                                <label class="col-md-3 control-label
                                @if($errors->first('act'))
                                        alert alert-danger
                                         @endif
                                        ">Actul în baza cărui a fost admis</label>
                                <div class="col-md-3">
                                    <input name="act" type="text"
                                           value="{{old('act')}}"
                                           placeholder="numar" class="form-control input-md">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label
                                @if($errors->first('lib_inst'))
                                        alert alert-danger
                                         @endif
                                        ">Limba de instruire </label>
                                <div class="col-md-2 ">
                                    <select name="lib_inst" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>

                                    </select>
                                </div>
                                <label class="col-md-3 control-label
                                @if($errors->first('lib_stud'))
                                        alert alert-danger
                                         @endif
                                        ">Limba străină studiată </label>
                                <div class="col-md-2 ">
                                    <select name="lib_stud" class="form-control">
                                        <option value="3">Franceză</option>
                                        <option value="4">Engleză</option>
                                        <option value="5">Germană</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label
                                    @if($errors->first('camin'))
                                            alert alert-danger
                                             @endif
                                            ">Necesitatea cazări în camin</label>
                                    <div class="col-md-4">
                                        <label class="radio-inline">
                                            <input type="radio" name="camin" value="1" checked="checked">
                                            Da
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="camin" value="0">
                                            Nu
                                        </label>
                                    </div>

                                </div>


<hr>                              <div class="form-group"> <label class="col-md-3 control-label " for="grup">Cota de 15%</label></div>

                                <div class="form-group checkbox">
                                    <label class="col-md-2 control-label " for="grup"></label>

                                    <div class=" col-md-2 checkbox">
                                        <label>
                                            @if($errors->first('cop_orf'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="cop_orf" value="1"
                                                   @if(old('cop_orf')) checked @endif
                                            >
                                            Copil Orfan
                                        </label>
                                    </div><label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('patru_cop'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="patru_cop" value="1"
                                                   @if(old('patru_cop')) checked @endif
                                            >
                                            Copil din familie cu 4 şi mai mulţi copii
                                        </label>

                                    </div>


                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('cop_cu_difect'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="cop_cu_difect" value="1"
                                                   @if(old('cop_cu_difect')) checked @endif
                                            >
                                            Copil cu deficienţe fizice şi senzoriale
                                        </label>
                                    </div>


                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('parinti_invalid'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="parinti_invalid" value="1"
                                                   @if(old('parinti_invalid')) checked @endif
                                            >
                                            Copil cu ambii părinţi invalizi
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('par_cernob'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="par_cernob" value="1"
                                                   @if(old('par_cernob')) checked @endif
                                            >
                                            Parinţii participanti la act milit şi Cernobîl
                                        </label>
                                    </div>

                                    <div class=" col-md-3 checkbox">
                                        <label>
                                            @if($errors->first('cop_romin'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="cop_romin" value="1"
                                                   @if(old('cop_romin')) checked @endif
                                            >
                                            Copil de etnie romă
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-3 checkbox">
                                        <label>
                                            @if($errors->first('cetatean_ucr'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="cetatean_ucr" value="1"

                                                   @if(old('cetatean_ucr')) checked @endif>
                                            Cetateni ai ucrainei de natione romani (moldoveni)
                                        </label>
                                    </div>
                                    <label class="col-md-1 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('parint_invalid'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="parint_invalid" value="1"
                                                   @if(old('parint_invalid')) checked @endif>
                                            Copil din familie unul din părinți Invalid de gradul I sau II
                                        </label>
                                    </div>
                                </div>

<hr>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('copil_est'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="copil_est" value="1"
                                                   @if(old('copil_est')) checked @endif
                                            >
                                            Copil din r-le de Est, Bender
                                        </label>
                                    </div>

                                    <div class="col-md-2 checkbox">
                                        <label>
                                            @if($errors->first('liv_mil'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="liv_mil" value="1"
                                                   @if(old('liv_mil')) checked @endif
                                            >
                                            Livret militar
                                        </label>

                                    </div>

                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-2 control-label
                                    @if($errors->first('baza_doc'))
                                            alert alert-danger
                                             @endif
                                            " for="dist">În baza documentelor:</label>
                                    <div class="col-md-6">
                                        <textarea placeholder="Seria actelor" rows="3" cols="30"
                                                  name="baza_doc"
                                                  class="form-control input-md">{{old('baza_doc')}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label
                                    @if($errors->first('dist'))
                                            alert alert-danger
                                             @endif
                                            " for="dist">Distinctii acordate la
                                        absolvire:</label>
                                    <div class="col-md-6">
                                        <textarea placeholder="Distinctiile acordate dupa absolvire" rows="3" cols="30"
                                                  name="dist" class="form-control input-md">{{old('dist')}}</textarea>
                                    </div>
                                </div>
                                <div id="optiune1" class="form-group">

                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label
                                    @if($errors->first('med_ex_ab'))
                                            alert alert-danger
                                             @endif
                                            ">Media examen de absolvire</label>
                                    <div class="col-md-2">
                                        <input name="med_ex_ab" type="text" placeholder="media"
                                               value="{{old('med_ex_ab')}}"
                                               class="form-control input-md">
                                    </div>
                                    <label class="col-md-3 control-label
                                    @if($errors->first('med_not_ads'))
                                            alert alert-danger
                                             @endif
                                            ">Media notelor de absolvire</label>
                                    <div class="col-md-2">

                                        <input name="med_not_ads" type="text" placeholder="media"
                                               value="{{old('med_not_ads')}}"
                                               class="form-control input-md">

                                    </div>
                                </div>
                                <hr>

                                <div class="col-md-offset-1">
                                    <div class="form-group col-md-4 " style=" width:350px;">
                                        <label class="col-md-7 control-label">Optiunea I</label>
                                        <div class="form-group">

                                            <label class="col-md-6 control-label">Limba de instruire</label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt1_nt1"
                                                       class="form-control input-md opt1 nt1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt1p1" class="col-md-6 control-label">
                                                Selectati Optiunea 1
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt1_nt2"
                                                       class="form-control input-md opt1 nt1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt1p2" class="col-md-6 control-label">
                                                Selectati Optiunea 1
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt1_nt3"
                                                       class="form-control input-md opt1 nt1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt1p3" class="col-md-6 control-label">
                                                Selectati Optiunea 1
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt1_nt4"
                                                       class="form-control input-md opt1 nt1">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">Media Optiunea I</label>
                                            <div class="col-md-4 ">
                                                <input type="text" id="media1" placeholder="media" name="opt1_md"
                                                       class="form-control input-md " disabled>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4" style="width: 350px">
                                        <label class="col-md-7 control-label">Optiunea II</label>
                                        <div class="form-group">

                                            <label class="col-md-6 control-label">Limba de instruire</label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt2_nt1"
                                                       class="form-control input-md opt2 nt2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt2p1" class="col-md-6 control-label">
                                                Selectati Optiunea 2
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt2_nt2"
                                                       class="form-control input-md opt2 nt2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt2p2" class="col-md-6 control-label">
                                                Selectati Optiunea 2
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt2_nt3"
                                                       class="form-control input-md opt2 nt2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt2p3" class="col-md-6 control-label">
                                                Selectati Optiunea 2
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt2_nt4"
                                                       class="form-control input-md opt2 nt2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">Media Optiunea II</label>
                                            <div class="col-md-4 ">
                                                <input type="text" placeholder="media" id="media2" name="opt2_md"
                                                       class="form-control input-md " disabled>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-4" style="width: 350px">
                                        <label class="col-md-7 control-label">Optiunea III</label>
                                        <div class="form-group">

                                            <label class="col-md-6 control-label">Limba de instruire</label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt3_nt1"
                                                       class="form-control input-md opt3 nt3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt3p1" class="col-md-6 control-label">
                                                Selectati Optiunea 3
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt3_nt2"
                                                       class="form-control input-md opt3 nt3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt3p2" class="col-md-6 control-label">
                                                Selectati Optiunea 3
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt3_nt3"
                                                       class="form-control input-md opt3 nt3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label id="opt3p3" class="col-md-6 control-label">
                                                Selectati Optiunea 3
                                            </label>
                                            <div class="col-md-4">
                                                <input type="number" placeholder="nota" name="opt3_nt4"
                                                       class="form-control input-md opt3 nt3">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">Media Optiunea III</label>
                                            <div class="col-md-4 ">
                                                <input type="text" placeholder="media" id="media3" name="opt3_md"
                                                       class="form-control input-md " disabled>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group" style="margin-left:100px;">
                                    <INPUT id="calc" class="btn btn-primary btn-lg" type="button" value="Calculeaza">

                                </div>
                            </div>
                            <p><a href="#" class="simple-back-to-top btn-lg"><span
                                            class="glyphicon glyphicon-circle-arrow-up btn-lg "
                                            style="font-size: 33px;"></span></a></p>
                            <div align="right" style="margin-right:40px;margin-bottom:20px;">
                                <input Class="btn btn-md btn-info" type="reset" style="margin-bottom: 10px"
                                       value="Anuleaza">
                                {{--<input Class="btn btn-info" type="button" style="margin-bottom: 10px"
                                       value="Genereaza PDF">
                                <input Class="btn btn-info" type="button" style="margin-bottom: 10px" value="Editare">--}}
                                <input Class="btn btn-success" type="submit" style="margin-bottom: 10px"
                                       value="Trimite datele">

                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
