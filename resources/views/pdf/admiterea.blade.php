<html>
<style>
    body{
        font-family: "Times New Roman";
    }
    .tab{
        padding-right:5em;
    }
</style>
<body>
<h3 align="center" style="text-transform: uppercase;">Colegiul Industrial Pedagogic</h3>
<h4 align="center">Admiterea {{\Carbon\Carbon::now()->year}}</h4>
@foreach($elev as $e)
<span class="tab">Numele: {{$e->nume}} </span>
<span class="tab">Prenumele: {{$e->prenume}}</span>
<span class="tab">Patronimicul: {{$e->patronimic}}</span>
<p>Sexul:
@if($e->sex == 1)
    Masculin
    @else
    Femenin
    @endif
</p>
<p>Data, luna si anul nasterii:@if($t = new \Carbon\Carbon($e->datanasterii)) {{$t->day}}/{{$t->month}}/{{$t->year}} @endif</p>
<p>Locul nasterii: </p>
<p>Adresa: r.{{$e->raion}}.,</p>
<p>Codul personal: {{$e->cod_personal}}</p>
<p>Seria: {{$e->seria_buletin}}</p>
<p>Nr: </p>
<p>Eliberat de oficiu: </p>
<p>Data: </p>
<p>Nationalitatea: </p>
{{--                        --}}
<p>Institutia de invatamint absolvita: </p>
<p>Anul absolvirii: </p>
<p>Actul in baza caruia a fost admis: </p>
<p>Media examenelor de absolvire: </p>
<p>Media generala a notelor de absolvire: </p>
<p>Limba de instruire: </p>
<p>Limba straina studiata: </p>
<p>Evidenta militara: </p>
<p>Telefon fix: </p>
<p>E-mail: </p>
<p>Necesitatea cazarii in camin: </p>
<p>Data complectarii: </p>
<p>Responsabil: </p>
@endforeach
</body>
</html>