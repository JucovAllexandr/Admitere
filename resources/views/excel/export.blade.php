<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style>
    th{
        transform: rotate(90deg);
    }
</style>
<body>
<table>
<tr>
    <th>Numele, prenumele</th>
    <th>Specilaitate</th>
    <th>Media Concursului</th>
    <th>Data depunerii</th>
    <th>Copil Orfan</th>
    <th>Copil Invalid de gradul I şi II</th>
    <th>Copil cu deficienţe fizice şi senzoriale</th>
    <th>Copii ai căror unul din părinţi este invalid de gradul I</th>
    <th>Parinţii participanti la act milit şi Cernobîl</th>
    <th>Copil din familie cu 4 şi mai mulţi copii</th>
    <th>Copil din r-le de Est, Bender</th>
    <th>Copil ţigan</th>
    <th>A îndeplinit serviciul militar</th>
    <th>Cetateni ai ucrainei de nation romani (moldoveni)</th>
    <th>Distincţiile acordate la absolvire</th>
    <th>Nota medie din actul de studii</th>
    <th>Buget</th>
    <th>Contract</th>
    <th>Actele retrase</th>
    <th>Naţionalitatea</th>
</tr>
    @foreach($elevi as $elev)
        <tr>
            <td>{{$elev->nume.' '.$elev->prenume}}</td>
            <td>@foreach($elev->specialitates()->get() as $den)
                    {{ucfirst($den->denumire)}}
                @endforeach</td>
            <td>{{$elev->media1}}</td>
            <td>{{$elev->created_at}}</td>
            <td>{{$elev->cop_orfan}}</td>
            <td>{{--????--}}0</td>
            <td>{{$elev->cop_deficiente}}</td>
            <td>{{$elev->un_par_inv}}</td>
            <td>{{$elev->parinti_Cernobil}}</td>
            <td>{{$elev->mm_patru_copii}}</td>
            <td>{{$elev->raion_est}}</td>
            <td>{{$elev->cop_roman}}</td>
            <td>{{$elev->livret_militar}}</td>
            <td>{{$elev->ucrainean}}</td>
            <td>{{--???--}}0</td>
            <td>{{--$elev->--}}0</td>
            <td>{{$elev->buget1}}</td>
            <td>{{$elev->contract1}}</td>
            <td>{{$elev->acte}}</td>
            <td>@foreach($elev->Nationalitys()->get() as $den)
                    {{ucfirst($den->nationality)}}
                @endforeach</td>
        </tr>
        @endforeach
</table>
</body>
</html>