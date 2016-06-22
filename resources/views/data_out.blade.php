@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12 ">
            <div class="panel panel-default">
            <div class="panel-heading" >Generare de Rapoarte </div>
                <div class="panel-body">
                <label class="col-md-3">Exportă de raport în PDF:</label>
                <ul class="col-md-12 ">
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">AS:lucrător social</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">AS:pedagog social</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">Administrarea aplicațiilor WEB</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">Rețele de calculatoare</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">Coregrafie</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">Pictura</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">Interpretare instrumentala</a></li>
                            <li><a href="{{URL::to('/export')}}" class="btn btn-primary">Ecologie și protecția mediului</a></li>
                            <li> <a href="{{URL::to('/export')}}" class="btn btn-primary">Programarea și analiza produselor de program</a></li>
                </ul>
                <label class="col-md-3">Exportă liste de concurs în Excel:</label>
                <ul class="col-md-12 ">
                    <li><a href="{{URL::to('/export/1')}}" class="btn btn-primary">AS:lucrător social</a></li>
                    <li><a href="{{URL::to('/export/2')}}" class="btn btn-primary">AS:pedagog social</a></li>
                    <li><a href="{{URL::to('/export/3')}}" class="btn btn-primary">Administrarea aplicațiilor WEB</a></li>
                    <li><a href="{{URL::to('/export/5')}}" class="btn btn-primary">Rețele de calculatoare</a></li>
                    <li><a href="{{URL::to('/export/6')}}" class="btn btn-primary">Coregrafie</a></li>
                    <li><a href="{{URL::to('/export/10')}}" class="btn btn-primary">Pictura</a></li>
                    <li><a href="{{URL::to('/export/9')}}" class="btn btn-primary">Interpretare instrumentala</a></li>
                    <li><a href="{{URL::to('/export/8')}}" class="btn btn-primary">Contabilitate</a></li>
                    <li><a href="{{URL::to('/export/7')}}" class="btn btn-primary">Ecologie și protecția mediului</a></li>
                    <li> <a href="{{URL::to('/export/4')}}" class="btn btn-primary">Programarea și analiza produselor de program</a></li>
                </ul>
                </div>
                </div>
            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Specialitate 1</th>
                    <th>Media</th>
                    <th>Specialitate 2</th>
                    <th>Media</th>
                    <th>Specialitate 3</th>
                    <th>Media</th>
                    <th>Pdf</th>
                </tr>
                </thead>

            </table>

            <script>
                $(function() {
                    $('#users-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: '{{ URL::to('show/data') }}',

                        columns: [
                            {data: 'nume'},
                            {data: 'prenume'},
                            {data: 'specialitate1', name: 'id_specialitate'},
                            {data: 'media1', name: 'media1'},
                            {data: 'specialitate2', name: 'id_specialitate2'},
                            {data: 'media2', name: 'media2'},
                            {data: 'specialitate3', name: 'id_specialitate3'},
                            {data: 'media3', name: 'media3'},
                            {data: 'pdf', name: 'pdf', orderable: false, searchable: false}
                        ]

                    });
                });
            </script>


        </div>
    </div>
@endsection
