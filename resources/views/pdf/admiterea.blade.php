<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<style>
    body{
        font-family: DejaVu Sans, sans-serif;
        font-size: 13px;
    }
    .tab{
        padding-right:5em;
    }
    .tab2{
        padding-right:9em;
    }
    .center{
        text-align: center;
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
<p>Data, luna si anul nasterii:@if($t = new \Carbon\Carbon($e->datanasterii)) {{$t->day}}/{{$t->month}}/{{$t->year}} @endif</p>
{{--<p>Locul nasterii: </p>--}}
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
        <th colspan="4" >Specialitatea (In ordinea preferintei)</th>
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
            @if($e->buget1)
            {{$e->media1}}
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
            @if($e->contract1)
            {{$e->media1}}
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
            @if($e->buget2)
                {{$e->media2}}
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
            @if($e->contract2)
                {{$e->media2}}
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
            @if($e->buget3)
                {{$e->media3}}
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
                {{$e->media3}}
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
    @foreach($e->languages3()->get() as $den)
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
<p>Responsabil: </p>
@endforeach
</body>
</html>