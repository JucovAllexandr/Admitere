@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-12">

            <table class="table table-bordered" id="users-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
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
                            {data: 'id', name: 'id'},
                            {data: 'name', name: 'name'},
                            {data: 'email', name: 'email'},
                            {data: 'created_at', name: 'created_at'},
                            //{data: 'updated_at', name: 'updated_at'}
                        ]
                    });
                });
            </script>


        </div>
    </div>
@endsection
