@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12">

            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>Specialitate 1</th>
                    <th>Specialitate 2</th>
                    <th>Specialitate 3</th>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Pdf</th>
                    <th>Specialitate</th>
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
                            {data: 'id_specialitate'},
                            {data: 'id_specialitate2'},
                            {data: 'id_specialitate3'},
                            {data: 'nume'},
                            {data: 'prenume'},
                            {data: 'pdf', name: 'pdf', orderable: false, searchable: false},
                            {data: 'specialitate', name: 'specialitate'}
                        ]
                    });
                });
            </script>


        </div>
    </div>
@endsection
