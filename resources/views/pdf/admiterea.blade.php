<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<style>
    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 13px;
    }

    .tab {
        padding-right: 5em;
    }

    .tab2 {
        padding-right: 9em;
    }

    .center {
        text-align: center;
    }

    .page-break {
        page-break-after: always;
    }
</style>
<body>
<h3 align="center" style="text-transform: uppercase;">Colegiul Industrial Pedagogic</h3>
<h4 align="center">Admiterea {{\Carbon\Carbon::now()->year}}</h4>
@foreach($elev as $e)
    <span class="tab">Numele: {{ucfirst($e->nume)}} </span>
    <span class="tab">Prenumele: {{ucfirst($e->prenume)}}</span>
    <span class="tab">Patronimicul: {{ucfirst($e->patronimic)}}</span>
    <p>Sexul:
        @if($e->sex == 1)
            Masculin
        @else
            Femenin
        @endif
    </p>
    <p>Data, luna si anul nasterii:@if($t = new \Carbon\Carbon($e->datanasterii)) {{$t->day}}/{{$t->month}}
        /{{$t->year}} @endif</p>
    <p>Locul nasterii: {{$e->loc_nas}}</p>
    <p>Adresa: r.{{ucfirst($e->raion)}}.,
        @if($e->sat_oras==1)
            s.{{ucfirst($e->num_sat_oras)}}
        @else
            o.{{ucfirst($e->num_sat_oras)}}
        @endif

    </p>
    <p>Codul personal: {{$e->cod_personal}}</p>
    <p><span class="tab2">Seria: {{$e->seria_buletin}}</span>
        Nr: {{$e->numar_buletin}}</p>
    <p><span class="tab">Eliberat de oficiu: {{$e->oficiu}}</span>
        Data: {{$e->buletin_data_eliberarii}}</p>
    <p>Nationalitatea:
        @foreach($e->Nationalitys()->get() as $den)
            {{ucfirst($den->nationality)}}
        @endforeach
    </p>
    <table border="0">
        <tr>
            <th colspan="4">Specialitatea (In ordinea preferintei)</th>
        </tr>
        <tr>
            <th>Buget</th>
            <th>MC</th>
            <th>Contract</th>
            <th>MC</th>
        </tr>
        <tr>
            <td>

                @if($e->buget1)
                    @foreach($e->specialitates()->get() as $den)
                        {{--mb_detect_encoding($den->denumire)--}}
                        {{--mb_convert_encoding ($den->denumire, "UTF-8")--}}
                        {{ucfirst($den->denumire)}}
                    @endforeach
                @endif
            </td>
            <td class="center">
                @if($e->id_specialitate != 6 && $e->id_specialitate != 9 && $e->id_specialitate != 10)
                @if($e->buget1)
                    {{$e->media1}}
                @endif
                    @endif
            </td>
            <td>
                @if($e->contract1)
                    @foreach($e->specialitates()->get() as $den)
                        {{ucfirst($den->denumire)}}
                    @endforeach
                @endif
            </td>
            <td class="center">
                @if($e->id_specialitate != 6 && $e->id_specialitate != 9 && $e->id_specialitate != 10)
                @if($e->contract1)
                    {{$e->media1}}
                @endif
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                @if($e->buget2)
                    @foreach($e->specialitates2()->get() as $den)
                        {{ucfirst($den->denumire)}}
                    @endforeach
                @endif
            </td>
            <td class="center">
                @if($e->id_specialitate2 != 6 && $e->id_specialitate2 != 9 && $e->id_specialitate2 != 10)
                @if($e->buget2)
                    {{$e->media2}}
                @endif
                @endif
            </td>
            <td>
                @if($e->contract2)
                    @foreach($e->specialitates2()->get() as $den)
                        {{ucfirst($den->denumire)}}
                    @endforeach
                @endif
            </td>
            <td class="center">
                @if($e->id_specialitate2 != 6 && $e->id_specialitate2 != 9 && $e->id_specialitate2 != 10)
                @if($e->contract2)
                    {{$e->media2}}
                @endif
                @endif
            </td>
        </tr>
        <tr>
            <td>
                @if($e->buget3)
                    @foreach($e->specialitates3()->get() as $den)
                        {{ucfirst($den->denumire)}}
                    @endforeach
                @endif
            </td>
            <td class="center">
                @if($e->id_specialitate3 != 6 && $e->id_specialitate3 != 9 && $e->id_specialitate3 != 10)
                @if($e->buget3)
                    {{$e->media3}}
                @endif
                @endif
            </td>
            <td>
                @if($e->contract3)
                    @foreach($e->specialitates3()->get() as $den)
                        {{ucfirst($den->denumire)}}
                    @endforeach
                @endif
            </td>
            <td class="center">
                @if($e->contract3)
                    @if($e->id_specialitate3 != 6 && $e->id_specialitate3 != 9 && $e->id_specialitate3 != 10)
                    {{$e->media3}}
                @endif
                @endif
            </td>
        </tr>
    </table>
    <p>Institutia de invatamint absolvita: {{$e->inst_abs}}</p>
    <p>Anul absolvirii: {{$e->an_abs}}</p>
    <p>Actul in baza caruia a fost admis: {{$e->acte}}</p>
    <p><span class="tab">Media examenelor de absolvire: {{$e->media_exam}}</span>
        Media generala a notelor de absolvire: {{$e->media_discipline}}</p>
    <p>Limba de instruire:
        @foreach($e->limb_instruire()->get() as $den)
            {{ucfirst($den->language)}}
        @endforeach
    </p>
    <p>Limba straina studiata:
        @foreach($e->limb_studiata()->get() as $den)
            {{ucfirst($den->language)}}
        @endforeach
    </p>
    <p>Evidenta militara:
        @if($e->serv_milit)
            Incorporabil
        @else
            Neincorporabil
        @endif
    </p>
    <p>Telefon fix: {{$e->telefon}}</p>
    <p>E-mail: {{$e->email}}</p>
    <p>Necesitatea cazarii in camin:
        @if($e->camin)
            Da
        @else
            Nu
        @endif
    </p>
    <p>Data complectarii: {{$e->updated_at}}</p>
    <p>Responsabil: <span style="border-bottom: 1px solid black; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span></p>
@endforeach
<div class="page-break"></div>
<h3 style="text-transform: uppercase; text-align: center">Colegiul Industrial Pedagogic</h3>
<h1 style="text-transform: uppercase; text-align: center; vertical-align: middle;
    margin-top: 20%;">Fisa de inscriere <br>la concursul de admitere <br>NR.<span
            style="border-bottom: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <br>anul {{\Carbon\Carbon::now()->year}}</h1>
<div class="page-break"></div>
<p style="padding-left: 5em;"><b><span style=" font-family: 'Arial Black'; font-size: 13px; ">
        I</span> Date personale</b></p>
<p><b>1.Numele:</b>{{ucfirst($e->nume)}} <b style="padding-left: 2em;">Prenume:</b> {{ucfirst($e->prenume)}}<b
            style="padding-left: 2em;">Patronimicul:</b>{{ucfirst($e->patronimic)}}</p>
<p><b>2.Sexul:</b>@if($e->sex == 1)
        Masculin
    @else
        Femenin
    @endif </p>
<p><b>3.Data, luna si anul nasterii:</b>@if($t = new \Carbon\Carbon($e->datanasterii)) {{$t->day}}/{{$t->month}}
    /{{$t->year}} @endif</p>
<p><b>4.Locul nasterii: </b>{{$e->loc_nas}}</p>
<p><b>5.Mediul de trai: </b>@if($e->sat_oras==1)
        Sat
    @else
        Oras
    @endif</p>
<p><b>6.Viza de domiciliu permanent:</b></p>
<p style="padding-left: 1em;"><b>Raionul:</b> {{ucfirst($e->raion)}}</p>
<p style="padding-left: 1em;"><b>Localitatea:</b> {{ucfirst($e->num_sat_oras)}}</p>
<p style="padding-left: 1em;"><b>Adresa:</b> r.{{ucfirst($e->raion)}}.,
    @if($e->sat_oras==1)
        s.{{ucfirst($e->num_sat_oras)}}
    @else
        o.{{ucfirst($e->num_sat_oras)}}
    @endif</p>
<p><b>7.Telefon fix:</b>{{$e->telefon}} <b style="padding-left: 1em;">Telefon mobil:</b>{{$e->telefon_mobil}}</p>
<p><b>8.E-mail: </b>{{$e->email}}</p>
<p><b>9.Certificat de nastere:</b></p>
<p style="padding-left: 1em;"><b>Eliberat: </b>
    @if($t = new \Carbon\Carbon($e->certificat_data_eliberarii)) {{$t->day}}/{{$t->month}}/{{$t->year}} @endif
    <b style="padding-left: 1em;">Seria Nr: </b>{{strtoupper($e->seria_certificat)}}</p>
<p><b>10.Buletinul de identitate ai candidatului</b></p>
<p style="padding-left: 1em;"><b>Seria: </b>{{strtoupper($e->seria_buletin)}} <b
            style="padding-left: 1em;">Nr: </b>{{$e->numar_buletin}}</p>
<p style="padding-left: 1em;"><b>Eliberat de of: </b>{{$e->oficiu}} <b
            style="padding-left: 1em;">Data: </b>{{$e->buletin_data_eliberarii}}</p>
<p style="padding-left: 1em;"><b>Codul personal: </b>{{$e->cod_personal}}</p>
<p><b>11.Nationalitatea: </b> @foreach($e->Nationalitys()->get() as $den)
        {{ucfirst($den->nationality)}}
    @endforeach</p>
<p style="padding-left: 1em;"><b>Cetatenia: </b>{{$e->cetatanie}}</p>
<p><b>12.Evidenta militara: </b>@if($e->serv_milit)
        Incorporabil
    @else
        Neincorporabil
    @endif</p>
<p style="padding-left: 1em;"><b>Livret militar nr: </b>{{$e->liv_mil_nr}}</p>
<p><b>13.Numele si prenumele parintilor: </b></p>
<p><b>Tatal: </b>{{ucfirst($e->tat_nume).' '.ucfirst($e->tat_prenume)}}</p>
<p><b>Mama: </b>{{ucfirst($e->mam_nume).' '.ucfirst($e->mam_prenume)}}</p>
<div class="page-break"></div>

<p><b>14.Institutia de invatamint absolvita: </b>{{$e->inst_abs}}</p>
<p><b>Act de studii:</b></p>
<p><b>Anul absolvirii: </b>{{$e->an_abs}}</p>
<p><b>Actul in baza caruia a fost admis: </b>{{strtoupper($e->acte)}}</p>
<p><b>15.Limba straina: </b>@foreach($e->limb_studiata()->get() as $den)
        {{ucfirst($den->language)}}
    @endforeach</p>
<p><b>Limba de instruire: </b> @foreach($e->languages3()->get() as $den)
        {{ucfirst($den->language)}}
    @endforeach</p>
<p><b>16.Necesitatea cazarii in camin: </b>@if($e->camin)
        Da
    @else
        Nu
    @endif</p>
<p><b>18.Inscrierea la concurs pentru cota de 15%:</b></p>
<p><b>In baza documntelor</b></p>
<p>{{$e->doc_seria}}</p>
<p><b>19.Disctinctii acordate la absolvire: </b></p>
<p>{{$e->distinc_abs}}</p>
<table border="0">
    <tr>
        <th colspan="4">Specialitatea (In ordinea preferintei)</th>
    </tr>
    <tr>
        <th>Buget</th>
        <th>MC</th>
        <th>Contract</th>
        <th>MC</th>
    </tr>
    <tr>
        <td>

            @if($e->buget1)
                @foreach($e->specialitates()->get() as $den)
                    {{--mb_detect_encoding($den->denumire)--}}
                    {{--mb_convert_encoding ($den->denumire, "UTF-8")--}}
                    {{ucfirst($den->denumire)}}
                @endforeach
            @endif
        </td>
        <td class="center">
            @if($e->id_specialitate != 6 && $e->id_specialitate != 9 && $e->id_specialitate != 10)
            @if($e->buget1)
                {{$e->media1}}
            @endif
            @endif
        </td>
        <td>
            @if($e->contract1)
                @foreach($e->specialitates()->get() as $den)
                    {{ucfirst($den->denumire)}}
                @endforeach
            @endif
        </td>
        <td class="center">
            @if($e->id_specialitate != 6 && $e->id_specialitate != 9 && $e->id_specialitate != 10)
            @if($e->contract1)
                {{$e->media1}}
            @endif
            @endif
        </td>
    </tr>
    <tr>
        <td>
            @if($e->buget2)
                @foreach($e->specialitates2()->get() as $den)
                    {{ucfirst($den->denumire)}}
                @endforeach
            @endif
        </td>
        <td class="center">
            @if($e->id_specialitate2 != 6 && $e->id_specialitate2 != 9 && $e->id_specialitate2 != 10)
            @if($e->buget2)
                {{$e->media2}}
            @endif
            @endif
        </td>
        <td>
            @if($e->contract2)
                @foreach($e->specialitates2()->get() as $den)
                    {{ucfirst($den->denumire)}}
                @endforeach
            @endif
        </td>
        <td class="center">
            @if($e->id_specialitate2 != 6 && $e->id_specialitate2 != 9 && $e->id_specialitate2 != 10)
            @if($e->contract2)
                {{$e->media2}}
            @endif
            @endif
        </td>
    </tr>
    <tr>
        <td>
            @if($e->buget3)
                @foreach($e->specialitates3()->get() as $den)
                    {{ucfirst($den->denumire)}}
                @endforeach
            @endif
        </td>
        <td class="center">
            @if($e->id_specialitate3 != 6 && $e->id_specialitate3 != 9 && $e->id_specialitate3 != 10)
            @if($e->buget3)
                {{$e->media3}}
            @endif
            @endif
        </td>
        <td>
            @if($e->contract3)
                @foreach($e->specialitates3()->get() as $den)
                    {{ucfirst($den->denumire)}}
                @endforeach
            @endif
        </td>
        <td class="center">
            @if($e->id_specialitate3 != 6 && $e->id_specialitate3 != 9 && $e->id_specialitate3 != 10)
            @if($e->contract3)
                {{$e->media3}}
            @endif
            @endif
        </td>
    </tr>
</table>
<table align="center" >
    <tr>
        <td colspan="2" align="center"><b>Optiunea 1 </b>
            @foreach($e->specialitates()->get() as $den)
                {{ucfirst($den->denumire)}}
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Limba de instruire solicitata: </b>
            @foreach($e->languages1()->get() as $den)
                {{ucfirst($den->language)}}
            @endforeach</td>
    </tr>
    <tr>
        <th>Discipline de profil</th>
        <th>Nota</th>
    </tr>
    @foreach($e->nt1()->get() as $den)
        <tr>
            <td>
                {{ucfirst($den->obiect1)}}
            </td>
            <td class="center">
                @if($den->nota1 != 0)
                {{$den->nota1}}
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                {{ucfirst($den->obiect2)}}
            </td>
            <td class="center">
                @if($den->nota2 != 0)
                {{$den->nota2}}
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                {{ucfirst($den->obiect3)}}
            </td>
            <td class="center">
                @if($den->nota3 != 0)
                {{$den->nota3}}
                    @endif
            </td>
        </tr>
        <tr >
            <td>
                {{ucfirst($den->obiect4)}}
            </td>
            <td class="center">
                @if($den->nota4 != 0)
                {{$den->nota4}}
                    @endif
            </td>
        </tr>
        <tr>
            <td><b>MNDP</b></td>
            <td class="center">{{$e->media_discipline}}</td>
        </tr>
        <tr>
            <td><b>MNEA</b></td>
            <td class="center">{{$e->media_exam}}</td>
        </tr>
        <tr>
            <td><b>MC</b></td>
            <td class="center">
                @if($e->id_specialitate != 6 && $e->id_specialitate != 9 && $e->id_specialitate != 10)
                {{$e->media1}}
                    @endif
            </td>
        </tr>
    @endforeach
</table>
<table align="center" >
    <tr>
        <td colspan="2" align="center"><b>Optiunea 2 </b>
            @foreach($e->specialitates2()->get() as $den)
                {{ucfirst($den->denumire)}}
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Limba de instruire solicitata: </b>
            @foreach($e->languages2()->get() as $den)
                {{ucfirst($den->language)}}
            @endforeach</td>
    </tr>
    <tr>
        <th>Discipline de profil</th>
        <th>Nota</th>
    </tr>
    @foreach($e->nt2()->get() as $den)
        <tr>
            <td>
                {{ucfirst($den->obiect1)}}
            </td>
            <td class="center">
                @if($den->nota1 != 0)
                {{$den->nota1}}
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                {{ucfirst($den->obiect2)}}
            </td>
            <td class="center">
                @if($den->nota2 != 0)
                {{$den->nota2}}
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                {{ucfirst($den->obiect3)}}
            </td>
            <td class="center">
                @if($den->nota3 != 0)
                {{$den->nota3}}
                    @endif
            </td>
        </tr>
        <tr >
            <td>
                {{ucfirst($den->obiect4)}}
            </td>
            <td class="center">
                @if($den->nota4 != 0)
                {{$den->nota4}}
                    @endif
            </td>
        </tr>
        <tr>
            <td><b>MNDP</b></td>
            <td class="center">{{$e->media_discipline}}</td>
        </tr>
        <tr>
            <td><b>MNEA</b></td>
            <td class="center">{{$e->media_exam}}</td>
        </tr>
        <tr>
            <td><b>MC</b></td>
            <td class="center">
                @if($e->id_specialitate2 != 6 && $e->id_specialitate2 != 9 && $e->id_specialitate2 != 10)
                {{$e->media2}}
                    @endif
            </td>
        </tr>
    @endforeach
</table>
<div class="page-break"></div>
<table align="center" >
    <tr>
        <td colspan="2" align="center"><b>Optiunea 3 </b>
            @foreach($e->specialitates3()->get() as $den)
                {{ucfirst($den->denumire)}}
            @endforeach
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>Limba de instruire solicitata: </b>
            @foreach($e->languages3()->get() as $den)
                {{ucfirst($den->language)}}
            @endforeach</td>
    </tr>
    <tr>
        <th>Discipline de profil</th>
        <th>Nota</th>
    </tr>
    @foreach($e->nt3()->get() as $den)
        <tr>
            <td>
                {{ucfirst($den->obiect1)}}
            </td>
            <td class="center">
                @if($den->nota1 != 0)
                {{$den->nota1}}
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                {{ucfirst($den->obiect2)}}
            </td>
            <td class="center">
                @if($den->nota2 != 0)
                {{$den->nota2}}
                    @endif
            </td>
        </tr>
        <tr>
            <td>
                {{ucfirst($den->obiect3)}}
            </td>
            <td class="center">
                @if($den->nota3 != 0)
                {{$den->nota3}}
                    @endif
            </td>
        </tr>
        <tr >
            <td>
                {{ucfirst($den->obiect4)}}
            </td>
            <td class="center">
                @if($den->nota4 != 0)
                {{$den->nota4}}
                    @endif
            </td>
        </tr>
        <tr>
            <td><b>MNDP</b></td>
            <td class="center">{{$e->media_discipline}}</td>
        </tr>
        <tr>
            <td><b>MNEA</b></td>
            <td class="center">{{$e->media_exam}}</td>
        </tr>
        <tr>
            <td><b>MC</b></td>
            <td class="center">
                @if($e->id_specialitate3 != 6 && $e->id_specialitate3 != 9 && $e->id_specialitate3 != 10)
                {{$e->media3}}
                    @endif
            </td>
        </tr>
    @endforeach
</table>
<p class="center">Subsemnatul, declar cele de mai sus pe propria mea raspundere</p>
<p class="center">Semnatura candidatului <span style="border-bottom: 1px solid black; padding-right: 150px;" >&nbsp;</span>
    data
    <span style="border-bottom: 1px solid black; padding-right: 100px;">&nbsp;</span></p>
<p class="center">Verificat <span
            style="border-bottom: 1px solid black; padding-right: 150px;">&nbsp;</span>data<span
            style="border-bottom: 1px solid black; padding-right: 100px;">&nbsp;</span></p>
</body>
</html>