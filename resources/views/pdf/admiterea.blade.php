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
<p>Seria: </p>
<p>Seria: </p>
<p>Seria: </p>
@endforeach
</body>
</html>