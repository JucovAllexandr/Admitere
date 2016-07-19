<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
    th {
        transform: rotate(90deg);
        width: 5px;
    }

</style>
<body>
<table>
    <tr>
        <th colspan="20" style="text-align: center; background-color: #12306f; ">{{$specialitate}}</th>
    </tr>
    <tr>
        <th>Numele, prenumele</th>
        <th>Asistență socială: lucrător social</th>
        <th>Administrarea aplicațiilor WEB</th>
        <th>Programarea și analiza produselor de program</th>
        <th>Coregrafie</th>
        <th>Ecologia și protecția mediului</th>
        <th>Contabilitate</th>
        <th>Media Concursului 1</th>
        <th>Media Concursului 2</th>
        <th>Media Concursului 3</th>
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
        <th>Nota medie din actul de studii</th>
        <th>Buget</th>
        <th>Contract</th>
        <th>Actele retrase</th>
        <th>Naţionalitatea</th>
        <th>Date de contact</th>
    </tr>
    @foreach($elevi as $elev)
        <tr>
            <td>{{$elev->nume.' '.$elev->prenume}}</td>
            <td>
                @if($elev->id_specialitate  == 1)
                    1
                @elseif($elev->id_specialitate2  == 1)
                    2
                @elseif($elev->id_specialitate3  == 1)
                    3
                @endif
            </td>
            <td> @if($elev->id_specialitate  == 3)
                    1
                @elseif($elev->id_specialitate2  == 3)
                    2
                @elseif($elev->id_specialitate3  == 3)
                    3
                @endif
            </td>
            <td> @if($elev->id_specialitate  == 4)
                    1
                @elseif($elev->id_specialitate2  == 4)
                    2
                @elseif($elev->id_specialitate3  == 4)
                    3
                @endif
            </td>
            <td> @if($elev->id_specialitate  == 6)
                    1
                @elseif($elev->id_specialitate2  == 6)
                    2
                @elseif($elev->id_specialitate3  == 6)
                    3
                @endif
            </td>
            <td> @if($elev->id_specialitate  == 7)
                    1
                @elseif($elev->id_specialitate2  == 7)
                    2
                @elseif($elev->id_specialitate3  == 7)
                    3
                @endif
            </td>
            <td> @if($elev->id_specialitate  == 8)
                    1
                @elseif($elev->id_specialitate2  == 8)
                    2
                @elseif($elev->id_specialitate3  == 8)
                    3
                @endif
            </td>
            <td>
                {{$elev->media1}}
            </td>
            <td>
                {{$elev->media2}}
            </td>
            <td>
                {{$elev->media3}}
            </td>
            <td>{{$elev->created_at}}</td>
            <td>{{$elev->cop_orfan}}</td>
            <td>{{$elev->copil_inv_gr_I_II}}</td>
            <td>{{$elev->cop_deficiente}}</td>
            <td>{{$elev->un_par_inv}}</td>
            <td>{{$elev->parinti_Cernobil}}</td>
            <td>{{$elev->mm_patru_copii}}</td>
            <td>{{$elev->raion_est}}</td>
            <td>{{$elev->cop_roman}}</td>
            <td>{{$elev->livret_militar}}</td>
            <td>{{$elev->ucrainean}}</td>
            <td>{{$elev->media_discipline}}</td>
            <td>{{$elev->buget1}}</td>
            <td>{{$elev->contract1}}</td>
            <td>              </td>
            <td>@foreach($elev->Nationalitys()->get() as $den)
                    {{ucfirst($den->nationality)}}
                @endforeach</td>
            <td>{{$elev->telefon}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>