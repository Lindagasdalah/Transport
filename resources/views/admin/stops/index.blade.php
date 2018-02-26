@extends('layouts.main')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Liste des stations</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <table id="routes-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>stop_name</th>
                    <th>stop_lat</th>
                    <th>stop_lon</th>
                    <th>transport_name</th>
                </tr>
                </thead>
                <tbody>

                @foreach($stops as $stop)

                    <tr>
                        <td>{{ $stop->stop_name }}</td>
                        <td>{{ $stop->stop_lat }}</td>
                        <td>{{ $stop->stop_lon }}</td>
                        <td>{{ $stop->transport_type->transport_name }}</td>
                        <td>
                            <a href="{{ route('stops.show', $stop->id) }}" class="btn btn-primary">Afficher</a>
                            <a href="{{ route('stops.edit', $stop->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('stops.delete', $stop->id) }}" class="btn btn-danger">Supprimer</a>
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
