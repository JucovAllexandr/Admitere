@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12">

            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th>Pdf</th>
                    <th>Specialitate 1</th>
                    <th>Media</th>
                    <th>Specialitate 2</th>
                    <th>Specialitate 3</th>
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
                            {data: 'pdf', name: 'pdf', orderable: false, searchable: false},
                            {data: 'specialitate1', name: 'specialitate1'},
                            {data: 'media1', name: 'media1'},
                            {data: 'specialitate2', name: 'specialitate2'},
                            {data: 'specialitate3', name: 'specialitate3'}
                        ]
                    });
                });
            </script>


        </div>
    </div>
@endsection
