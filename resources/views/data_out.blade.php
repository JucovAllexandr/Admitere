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

                            <div class="form-group ">
                                <label class="col-md-2 control-label
                                        ">@foreach($elev as $e)
                                        @foreach($e->specialitates()->get() as $den)
                                            {{$den->denumire}}
                                        @endforeach
                                    @endforeach</label>

                                <!--select-->
                                <div class="col-md-1">
                                    <div class="checkbox">
                                        <label >
                                            <input type="checkbox" name="bug1" value="1"
                                                   @foreach($elev as $e)
                                                   @if($e->buget1) checked @endif
                                                   @endforeach
                                            >
                                            Buget
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 checkbox">
                                    <label>
                                        <input type="checkbox" name="cont1" value="1"
                                               @foreach($elev as $e)
                                               @if($e->contract1) checked @endif
                                                @endforeach
                                        >
                                        Contract
                                    </label>

                                </div>
                                <label class="col-md-3 control-label
                                        ">Limba de instruire </label>
                                <div class="col-md-1 control-label ">
                                    @foreach($elev as $e)
                                        @foreach($e->languages1()->get() as $den)
                                            {{$den->language}}
                                        @endforeach
                                    @endforeach

                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-2 control-label  ">    @foreach($elev as $e)
                                        @foreach($e->specialitates2()->get() as $den)
                                            {{$den->denumire}}
                                        @endforeach
                                    @endforeach</label>

                                <!--select-->
                                <div class="col-md-1">
                                    <div class="checkbox">
                                        <label
                                        >
                                            <input type="checkbox"
                                                   @foreach($elev as $e)
                                                   @if($e->buget2) checked @endif
                                                    @endforeach
                                            >
                                            Buget
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 checkbox">
                                    <label
                                    >
                                        <input type="checkbox"
                                               @foreach($elev as $e)
                                               @if($e->contract2) checked @endif
                                                @endforeach
                                        >
                                        Contract
                                    </label>

                                </div>
                                <label class="col-md-3 control-label">Limba de instruire </label>
                                <div class="col-md-1 control-label ">
                                    @foreach($elev as $e)
                                        @foreach($e->languages2()->get() as $den)
                                            {{$den->language}}
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-md-2 control-label ">
                                    @foreach($elev as $e)
                                        @foreach($e->specialitates3()->get() as $den)
                                            {{$den->denumire}}
                                        @endforeach
                                    @endforeach</label>

                                <!--select-->
                                <div class="col-md-1">
                                    <div class="checkbox">
                                        <label
                                        >
                                            <input type="checkbox" name="bug3" value="1"
                                                   @foreach($elev as $e)
                                                   @if($e->buget3) checked @endif
                                                    @endforeach
                                            >
                                            Buget
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 checkbox">
                                    <label>
                                        <input type="checkbox"
                                               @foreach($elev as $e)
                                               @if($e->contract3) checked @endif
                                                @endforeach
                                        >
                                        Contract
                                    </label>

                                </div>
                                <label class="col-md-3 control-label
                                        ">Limba de instruire </label>
                                <div class="col-md-1 control-label ">
                                    @foreach($elev as $e)
                                        @foreach($e->languages3()->get() as $den)
                                            {{$den->language}}
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>

                            <!--input_data-->
                            <div class="form-group">
                                <label class="col-md-1 control-label">Nume</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->nume }}
                                    @endforeach

                                </div>
                                <label class="col-md-2 control-label
                                 @if($errors->first('prenum'))
                                        alert alert-danger
                                        @endif
                                        ">Prenume</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->prenume }}
                                    @endforeach

                                </div>
                                <label class="col-md-2 control-label
                                @if($errors->first('patronim'))
                                        alert alert-danger
                                        @endif
                                        ">Patronim</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->patronimic }}
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-1 control-label
                                @if($errors->first('sex'))
                                        alert alert-danger
                                        @endif
                                        " for="sex">Sexul</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                       @if($e->sex==1 )
                                            masculin
                                           @elseif($e->sex==2)
                                            femenin
                                        @endif
                                    @endforeach
                                </div>  <!--sexul-->
                                <label class="col-md-2 control-label
                                     ">Etnia</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        @foreach($e->Nationalitys()->get() as $den)
                                            {{$den->nationality}}
                                        @endforeach
                                    @endforeach

                                </div>

                                <!--natie-->

                                <label class="col-md-2 control-label">Data nașterii:</label>
                                <div class="col-md-2 control-label" style="margin-left: -40px;">
                                    @foreach($elev as $e)
                                        {{$e->datanasterii}}
                                    @endforeach

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-1 control-label ">Raion:</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->raion}}
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="adresa">Adresa:</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            {{$e->adresa}}
                                        @endforeach

                                    </div>


                                    <label class="col-md-2 control-label" for="sat_oras">Sat/Oraș</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            @if($e->sat_oras ==1)
                                                Sat
                                                @elseif($e->sat_oras ==2)
                                                Oraș
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="telefon">Telefon:</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->telefon}}
                                    @endforeach

                                </div>
                                <label class="col-md-1 control-label " for="mob">Mobil:</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->telefon_mobil}}
                                    @endforeach

                                </div>
                                <label class="col-md-2 control-label" for="email">E-mail:</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->email}}
                                    @endforeach

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
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->seria_certificat}}
                                    @endforeach
                                </div>

                                <label class="col-md-1 control-label">Eliberat</label>
                                <div class="col-md-2 control-label" style="margin-left: -40px;">

                                    @foreach($elev as $e)
                                        {{$e->certificat_data_eliberarii}}
                                    @endforeach
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Buletin de identitate al candidatului</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label">Seria </label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->seria_buletin}}
                                    @endforeach
                                </div>

                                <label class="col-md-1 control-label">Nr.</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->numar_buletin}}
                                    @endforeach
                                </div>
                                <label class="col-md-2 control-label">Eliberat de oficiul</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->oficiu}}
                                    @endforeach
                                </div>
                                <label class="col-md-2 control-label">Data eliberari</label>
                                <div class="col-md-2 control-label" style="margin-left: -40px;">
                                    @foreach($elev as $e)
                                        {{$e->buletin_data_eliberarii}}
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Codul personal</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->cod_personal}}
                                    @endforeach
                                </div>
                                <label class="col-md-2 control-label">Cetatenie</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        @if($e->cetatanie==1)
                                            MD
                                        @elseif($e->cetatanie==2)
                                            RO
                                        @elseif($e->cetatanie==3)
                                            RU
                                        @elseif($e->cetatanie==4)
                                            UA
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3  control-label"> Numele și prenumele părinților</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label"> Tatăl</label>
                                <label class="col-md-2 control-label"> Nume</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->tat_nume}}
                                    @endforeach

                                </div>
                                <label class="col-md-2 control-label">Prenume</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->tat_prenume}}
                                    @endforeach

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label"> Mama</label>
                                <label class="col-md-2 control-label"> Nume</label>
                                <div class="col-md-1 control-label ">
                                    @foreach($elev as $e)
                                        {{$e->mam_nume}}
                                    @endforeach
                                </div>
                                <label class="col-md-2 control-label">Prenume</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->mam_prenume}}
                                    @endforeach

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Instituția de învatămant absolvită</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->inst_abs}}
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Anul absolvirii</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->an_abs}}
                                    @endforeach
                                </div>
                                <label class="col-md-3 control-label">Actul în baza cărui a fost admis</label>
                                <div class="col-md-1 control-label">
                                    @foreach($elev as $e)
                                        {{$e->acte}}
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Limba de instruire </label>
                                <div class="col-md-1 control-label ">
                                    @foreach($elev as $e)
                                        @foreach($e->languages3()->get() as $den)
                                            {{$den->language}}
                                        @endforeach
                                    @endforeach
                                </div>
                                <label class="col-md-3 control-label">Limba străină studiată </label>
                                <div class="col-md-1 control-label ">
                                    @foreach($elev as $e)
                                        @foreach($e->limb_studiata()->get() as $den)
                                            {{$den->language}}
                                        @endforeach
                                    @endforeach
                                </div>



                                </div>
                                <div class="form-group ">
                                    <label class="col-md-3 control-label">Necesitatea cazări în camin:</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            @if($e->camin == 1)
                                                Da
                                            @else
                                                Nu
                                            @endif
                                        @endforeach

                                    </div></div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-2">
                                        <div class="col md-2 checkbox">
                                            <label>

                                                <input type="checkbox" @foreach($elev as $e)
                                                @if($e->gimnaziu) checked @endif
                                                        @endforeach
                                                >
                                                Gimnaziu
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->livret_militar) checked @endif
                                                    @endforeach
                                            >
                                            Livret militar
                                        </label>

                                    </div>
                                </div>


                                <div class="form-group checkbox">
                                    <label class="col-md-2 control-label " for="grup"></label>

                                    <div class=" col-md-2 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->aloling) checked @endif
                                                    @endforeach
                                            >
                                            Alolingv
                                        </label>
                                    </div>
                                    <div class=" col-md-2 checkbox">
                                        <label>

                                            <input type="checkbox"  @foreach($elev as $e)
                                            @if($e->cop_orfan) checked @endif
                                                    @endforeach
                                            >
                                            Copil Orfan
                                        </label>
                                    </div>
                                    <div class=" col-md-5 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->mm_patru_copii) checked @endif
                                                    @endforeach
                                            >
                                            Copil din familie cu 4 şi mai mulţi copii
                                        </label>

                                    </div>
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>

                                            <input type="checkbox" name="indep_serv_mil" @foreach($elev as $e)
                                            @if($e->serv_milit) checked @endif
                                                    @endforeach
                                            >
                                            A îndeplinit serviciul militar
                                        </label>


                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->cop_deficiente) checked @endif
                                                    @endforeach
                                            >
                                            Copil cu deficienţe fizice şi senzoriale
                                        </label>
                                    </div>


                                    <div class=" col-md-4 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->parinti_invalizi) checked @endif
                                                    @endforeach
                                            >
                                            Copil cu ambii părinţi invalizi
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->parinti_Cernobil) checked @endif
                                                    @endforeach
                                            >
                                            Parinţii participanti la act milit şi Cernobîl
                                        </label>
                                    </div>

                                    <div class=" col-md-3 checkbox">
                                        <label>
                                            <input type="checkbox"  @foreach($elev as $e)
                                            @if($e->cop_roman) checked @endif
                                                    @endforeach
                                            >
                                            Copil de etnie romă
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->raion_est) checked @endif
                                                    @endforeach
                                            >
                                            Copil din r-le de Est, Bender
                                        </label>
                                    </div>
                                    <div class=" col-md-4 checkbox">
                                        <label>

                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->ucrainean) checked @endif
                                                    @endforeach
                                            >
                                            Cetateni ai ucrainei de natione romani (moldoveni)
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="grup"></label>
                                    <div class=" col-md-4 checkbox">
                                        <label>
                                            <input type="checkbox" @foreach($elev as $e)
                                            @if($e->un_par_inv) checked @endif
                                                @endforeach>
                                            Un parinte invalid
                                        </label>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label class="col-md-2 control-label " for="dist">În baza documentelor:</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            {{$e->doc_seria}}
                                        @endforeach

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="dist">Distinctii acordate la
                                        absolvire:</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            {{$e->distinc_abs}}
                                        @endforeach

                                    </div>
                                </div>
                                <div id="optiune1" class="form-group">

                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Media examen de absolvire</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            {{$e->media_exam}}
                                        @endforeach
                                    </div>
                                    <label class="col-md-3 control-label">Media notelor de absolvire</label>
                                    <div class="col-md-1 control-label">
                                        @foreach($elev as $e)
                                            {{$e->media_discipline}}
                                        @endforeach

                                    </div>
                                </div>
                                <hr>

                                <div class="col-md-offset-1">
                                    <div class="form-group col-md-4 " style=" width:350px;">
                                        <div class="form-group">
                                            <label class="col-md-6 control-label">Media Optiunea I</label>
                                            <div class="col-md-1 control-label ">
                                                @foreach($elev as $e)
                                                    {{$e->media1}}
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4" style="width: 350px">

                                        <div class="form-group">
                                            <label class="col-md-6 control-label">Media Optiunea II</label>
                                            <div class="col-md-1 control-label">
                                                @foreach($elev as $e)
                                                    {{$e->media2}}
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-4" style="width: 350px">

                                            <label class="col-md-6 control-label">Media Optiunea III</label>
                                            <div class="col-md-1 control-label">
                                                @foreach($elev as $e)
                                                    {{$e->media3}}
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
