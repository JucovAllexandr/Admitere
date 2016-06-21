@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12 ">
            <div class=""></div>
            <a href="{{URL::to('/export')}}" class="btn btn-primary">Export</a>
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
                        ajax: '{{ url('show/data') }}',

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
