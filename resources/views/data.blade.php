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
                                introduse NU pot fi modificate.Completați cu atenție datele!</p>
                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                @if($errors->first('specialitate1'))
                                        alert alert-danger
                                        @endif
                                        ">Selectați Opțiunea 1</label>
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
                                        <option value="9" id="o1-ii">Interpretare instrumentală</option>
                                        <option value="10" id="o1-pic">Pictură</option>
                                    </select>
                                    @if(old('specialitate1')!=null)
                                        <script>
                                            $('#specialitate1 option[value="{{old('specialitate1')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif

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
                                        ">Limba de instruire Opțiunea 1</label>
                                <div class="col-md-2 ">
                                    <select id="lib1" name="lib1" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>
                                    </select>
                                    @if(old('lib1')!=null)
                                        <script>
                                            $('#lib1 option[value="{{old('lib1')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                @if($errors->first('specialitate2'))
                                        alert alert-danger
                                        @endif
                                        ">Selectați Opțiunea 2</label>
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
                                    @if(old('specialitate2')!=null)
                                        <script>
                                            $('#specialitate2 option[value="{{old('specialitate2')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
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
                                        ">Limba de instruire Opțiunea 2</label>
                                <div class="col-md-2 ">
                                    <select id="lib2" name="lib2" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>
                                    </select>
                                    @if(old('lib2')!=null)
                                        <script>
                                            $('#lib2 option[value="{{old('lib2')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                @if($errors->first('specialitate3'))
                                        alert alert-danger
                                        @endif
                                        ">Selectați Opțiunea 3</label>
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
                                        <option value="9" id="o3-ii">Interpretare instrumentală</option>
                                        <option value="10" id="o3-pic">Pictură</option>
                                    </select>
                                    @if(old('specialitate3')!=null)
                                        <script>
                                            $('#specialitate3 option[value="{{old('specialitate3')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
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
                                        ">Limba de instruire Opțiunea 3</label>
                                <div class="col-md-2 ">
                                    <select id="lib3" name="lib3" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>
                                    </select>
                                    @if(old('lib3')!=null)
                                        <script>
                                            $('#lib3 option[value="{{old('lib3')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
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
                                    @if(old('sex')!=null)
                                        <script>
                                            $('#sex option[value="{{old('sex')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
                                </div>
                                <label style="margin-right:10px;" class="col-md-1 control-label
                                       @if($errors->first('natia'))
                                        alert alert-danger
                                         @endif
                                        ">Naționalitatea</label>
                                <div class="col-md-2">

                                    <select id="natia" name="natia" class="form-control">
                                        @foreach(\App\Nationality::orderBy('nationality')->get() as $n)
                                            @if($n->id == 115)
                                                <option value="{{$n->id}}"
                                                        selected>{{ucfirst($n->nationality)}}</option>
                                            @else
                                                <option value="{{$n->id}}">{{ucfirst($n->nationality)}}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                    @if(old('natia')!=null)
                                        <script>
                                            $('#natia option[value="{{old('natia')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
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
                                            ">Sat/Oraș</label>
                                    <div class="col-md-2">
                                        <select id="sat_oras" name="sat_oras" class="form-control">
                                            <option value="1">Sat</option>
                                            <option value="2">Oraș</option>
                                        </select>
                                        @if(old('sat_oras')!=null)
                                            <script>
                                                $('#sat_oras option[value="{{old('sat_oras')}}"]').attr('selected', 'selected');
                                            </script>
                                        @endif
                                    </div>

                                    <label class="col-md-2 control-label
                                        @if($errors->first('num_sat_oras'))
                                            alert alert-danger
                                             @endif
                                            ">Nume (sat/oraș):</label>
                                    <div class="col-md-3">
                                        <input name="num_sat_oras" type="text" placeholder="Nume (sat/oras)"
                                               value="{{old('num_sat_oras')}}" class="form-control input-md  ">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label
                                        @if($errors->first('strada'))
                                        alert alert-danger
                                         @endif
                                        ">Strada:</label>
                                <div class="col-md-3">
                                    <input name="strada" type="text" placeholder="Strada"
                                           value="{{old('strada')}}" class="form-control input-md  ">
                                </div>

                                <label class="col-md-2 control-label
                                        @if($errors->first('nr_bloc'))
                                        alert alert-danger
                                         @endif
                                        ">Nr. bloc/apartament:</label>
                                <div class="col-md-3">
                                    <input name="nr_bloc" type="text" placeholder="Numar"
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
                                <label class="col-md-2 control-label
                                @if($errors->first('loc_nas'))
                                        alert alert-danger
                                         @endif
                                        ">Locul naștеri</label>
                                <div class="col-md-3">
                                    <input type="text" name="loc_nas" class="form-control input-md"
                                           value="{{old('dat_elib')}}" placeholder="Locul naștеri">
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
                                        ">Data eliberări</label>
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
                                        ">Cetățenie</label>
                                <div class="col-md-2">
                                    <select id="cetatanie" name="cetatanie" class="form-control">
                                        <option value="1">MD</option>
                                        <option value="2">RO</option>
                                        <option value="3">RU</option>
                                        <option value="4">UA</option>
                                    </select>
                                    @if(old('cetatanie')!=null)
                                        <script>
                                            $('#cetatanie option[value="{{old('cetatanie')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
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
                                    <select id="lib_inst" name="lib_inst" class="form-control">
                                        <option value="1">Română</option>
                                        <option value="2">Rusă</option>
                                    </select>
                                    @if(old('lib_inst')!=null)
                                        <script>
                                            $('#lib_inst option[value="{{old('lib_inst')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
                                </div>
                                <label class="col-md-3 control-label
                                @if($errors->first('lib_stud'))
                                        alert alert-danger
                                         @endif
                                        ">Limba străină studiată </label>
                                <div class="col-md-2 ">
                                    <select id="lib_stud" name="lib_stud" class="form-control">
                                        <option value="3">Franceză</option>
                                        <option value="4">Engleză</option>
                                        <option value="5">Germană</option>
                                    </select>
                                    @if(old('lib_stud')!=null)
                                        <script>
                                            $('#lib_stud option[value="{{old('lib_stud')}}"]').attr('selected', 'selected');
                                        </script>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label
                                    @if($errors->first('camin'))
                                            alert alert-danger
                                             @endif
                                            ">Necesitatea cazări în camin</label>
                                    <div class="col-md-4">
                                        @if(old('camin')==0)
                                            <label class="radio-inline">
                                                <input type="radio" name="camin" value="1">
                                                Da
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="camin" value="0" checked>
                                                Nu
                                            </label>
                                        @else
                                            <label class="radio-inline">
                                                <input type="radio" name="camin" value="1" checked>
                                                Da
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="camin" value="0">
                                                Nu
                                            </label>
                                        @endif
                                    </div>

                                </div>


                                <hr>
                                <div class="form-group"><label class="col-md-3 control-label " for="grup">Cota de
                                        15%</label></div>

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
                                    </div>
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('patru_cop'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="patru_cop" value="1"
                                                   @if(old('patru_cop')) checked @endif>
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
                                            Cetăteni ai ucrainei de natione romani (moldoveni)
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
                                    <label class="col-md-6 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            @if($errors->first('copil_inv_gr_I_II'))
                                                class=" alert alert-danger"
                                            @endif
                                            <input type="checkbox" name="copil_inv_gr_I_II" value="1"
                                                   @if(old('copil_invalid')) checked @endif>
                                            Copil Invalid de gradul I şi II
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
                                            <input type="checkbox" name="copil_est" id="copil_est" value="1"
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
                                            <input type="checkbox" id="liv_mil" name="liv_mil" value="1"
                                                   @if(old('liv_mil')) checked @endif
                                            >
                                            Livret militar

                                        </label>
                                        <input type="text" id="liv_mil_nr" name="liv_mil_nr" value=""
                                               placeholder="Nr/S livret militar" disabled>

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
                                        <input name="med_ex_ab" id="med_ex_ab" type="text" placeholder="media"
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
                            </div>
                            <hr>
                            <table>
                                <tr>
                                    <td>
                                        <label class="col-md-6 control-label">Limba de
                                            instruire</label>
                                        <div class="col-md-4">
                                            <input type="number" placeholder="nota" id="lim_instruire" name="lim_instruire"
                                                   value="{{old('lim_instruire')}}"  class="form-control input-md " >
                                        </div>

                                    </td>
                                    <td>
                                        <label class="col-md-6 control-label">
                                            Limba străină
                                        </label>
                                        <div class="col-md-5">
                                            <input type="number" placeholder="nota" id="lim_straina" name="lim_straina"
                                              value="{{old('lim_straina')}}" class="form-control input-md " disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <label  class="col-md-5 control-label">
                                            Matematica
                                        </label>
                                        <div class="col-md-5">
                                            <input type="number" placeholder="nota" id="matem" name="matem"
                                             value="{{old('matem')}}" class="form-control input-md " disabled>
                                        </div>

                                    </td>
                                    <td>
                                        <label  class="col-md-4 control-label">
                                            Biologia
                                        </label>
                                        <div class="col-md-5 ">
                                            <input type="number" placeholder="nota" id="biologia" name="biologia"
                                            value="{{old('biologia')}}" class="form-control input-md " disabled>
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="col-md-6 control-label">Istoria</label>
                                        <div class="col-md-4">
                                            <input type="number" placeholder="nota" id="istoria" name="istoria"
                                             value="{{old('istoria')}}" class="form-control input-md " disabled>
                                        </div>

                                    </td>
                                    <td>
                                        <label class="col-md-6 control-label">
                                            Chimia
                                        </label>
                                        <div class="col-md-5">
                                            <input type="number" placeholder="nota" id="chimia" name="chimia"
                                             value="{{old('chimia')}}" class="form-control input-md " disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <label class="col-md-5 control-label">
                                            Informatica
                                        </label>
                                        <div class="col-md-5">
                                            <input type="number" placeholder="nota" id="informatica" name="informatica"
                                             value="{{old('informatica')}}" class="form-control input-md " disabled>
                                        </div>

                                    </td>
                                    <td>
                                        <label class="col-md-4 control-label">
                                            Proba de aptitudini
                                        </label>
                                        <div class="col-md-5 ">
                                            <input type="number" placeholder="nota" id="aptitudini" name="aptitudini"
                                             value="{{old('aptitudini')}}" class="form-control input-md " disabled>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                            <div align="center" style="margin-bottom: 30px;margin-top:30px;">
                                <INPUT id="calc" class="btn btn-primary btn-lg" type="button" value="Calculeaza">

                            </div>
                            <table>
                                <tr>
                                    <td><label id="md1" class="col-md-6 control-label">Media Opțiunea I</label>
                                        <div class="col-md-4 ">
                                            <input type="text" placeholder="media" id="media1" name="opt1_md"
                                                   class="form-control input-md " disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <label id="md2" class="col-md-6 control-label">Media Opțiunea II</label>
                                        <div class="col-md-4 ">
                                            <input type="text" placeholder="media" id="media2" name="opt2_md"
                                                   class="form-control input-md " disabled>

                                        </div>
                                    </td>
                                    <td>
                                        <label id="md3" class="col-md-6 control-label">Media Opțiunea III</label>
                                        <div class="col-md-4 ">
                                            <input type="text" placeholder="media" id="media3" name="opt3_md"
                                                   class="form-control input-md " disabled>

                                        </div>
                                    </td>
                                </tr>
                            </table>


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
