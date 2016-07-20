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
        <th colspan="27" style="text-align: center; background-color: #12306f; ">{{$specialitate}}</th>
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
        {{--12--}}<th>Copii ramasi fara ocrotire parintesca</th>
        {{--13--}}<th>Copii cu dizabilitate severa, accentuata si medie</th>
        {{--14--}}<th>Copii care au parinti cu dizabilitate severa </th>
        {{--15--}}<th>Copii a carui parinti au participat la actiunele militare pentru aparare integritatii si Independentii Republicii Moldova; La actiunile de lupta din Afganistan sau la lichidarea consecintelor avariei de la Cernobil </th>
        {{--16--}}<th>Copii proveniti din familiile cu patru si mai multi copii, aflati la intretinerea parintilor </th>
        {{--17--}}<th>Copii de etnie romă </th>
        {{--18--}}<th>Tinerii care au indeplinit seviciul militar in termen</th>
        <th>Copil din r-le de Est, Bender</th>
        {{--<th>A îndeplinit serviciul militar</th>--}}
        {{--<th>Cetateni ai ucrainei de nation romani (moldoveni)</th>--}}
        <th>Nota medie din actul de studii</th>
        <th>Buget</th>
        <th>Contract</th>
        <th>Actele retrase</th>
        <th>Cetatanie</th>
        <th>Date de contact</th>
        <th>Limba străină studiată</th>
        <th>Necesitatea cazări în camin</th>
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
            {{--12--}}<td>{{$elev->cop_orfan}}</td>
            {{--13--}}<td>{{$elev->cop_deficiente}}</td>
            {{--14--}}<td>{{$elev->parinti_invalizi}}</td>
            {{--15--}}<td>{{$elev->parinti_Cernobil}}</td>
            {{--16--}}<td>{{$elev->mm_patru_copii}}</td>
            {{--17--}}<td>{{$elev->cop_roman}}</td>
            {{--18--}}<td>{{$elev->cop_serv_mil}}</td>
            {{--19--}}<td>{{$elev->raion_est}}</td>
            {{--20<td>{{$elev->livret_militar}}</td>--}}
            {{--<td>{{$elev->ucrainean}}</td>--}}
            <td>{{$elev->media_discipline}}</td>
            <td>{{$elev->buget1}}</td>
            <td>{{$elev->contract1}}</td>
            <td>              </td>
            <td>@if($elev->cetatanie==1)
                    MD
                @endif
                @if($elev->cetatanie==2)
                    RO
                @endif
                @if($elev->cetatanie==3)
                    RU
                @endif
                @if($elev->cetatanie==4)
                    UA
                @endif</td>
            <td>{{$elev->telefon}}</td>
            <td>@foreach($elev->limb_studiata()->get() as $den)
                    {{ucfirst($den->language)}}
                @endforeach</td>
            <td>{{$elev->camin}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>