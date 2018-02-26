@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">

            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détails station</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i>stop_name</strong>

                        <p class="text-muted">
                            {{ $stop->stop_name}}
                        </p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> stop_lat</strong>

                        <p class="text-muted">
                            {{ $stop->stop_lat }}
                        </p>
                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> stop_lon</strong>

                        <p class="text-muted">
                            {{ $stop->stop_lon }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-o margin-r-5"></i> Agence</strong>

                        <p class="text-muted">
                            {{ $stop->type_transport->transport_name }}
                        </p>

                        <hr>


                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>

@endsection