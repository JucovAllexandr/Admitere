<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>

<body>
<table>
    <tr>
        <th colspan="2" style="text-align: center; background-color: #12306f; ">{{$specialitate}}</th>
    </tr>
    <tr>
        <th>Nr</th>
        <th>Numele, prenumele</th>
        <th>Media Concursului</th>
    </tr>
    @for ($i = 0; $i < count($elevi); $i++)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$elevi[$i]['nume']}}</td>
            <td>
                {{$elevi[$i]['media']}}
            </td>

        </tr>
    @endfor
</table>
</body>
</html>