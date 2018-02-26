@extends('layouts.main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des routes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="routes-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Short Name</th>
                    <th>Long Name</th>
                    <th>Desription</th>
                    <th>Type</th>
                    <th>Color</th>
                    <th>Text Color</th>
                    <th>Agence</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($routes as $route)

                    <tr>
                        <td>{{ $route->route_Sname }}</td>
                        <td>{{ $route->route_Lname }}</td>
                        <td>{{ $route->route_desc }}</td>
                        <td>{{ $route->route_type }}</td>
                        <td>{{ $route->route_color }}</td>
                        <td>{{ $route->route_txtColor }}</td>
                        <td>{{ $route->agence->agence_name }}</td>
                        <td>
                            <a href="{{ route('routes.show', $route->id) }}" class="btn btn-primary">Afficher</a>
                            <a href="{{ route('routes.edit', $route->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('routes.delete', $route->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>

                @endforeach

                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>
    </div>

@endsection

@section('js')

    <script src="{{ asset('theme/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

    <script>
        $('#products-table').DataTable();
    </script>

@endsection
