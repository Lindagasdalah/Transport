@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">

            <!-- left column -->
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détails Routes</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-pencil margin-r-5"></i>Short Name</strong>

                        <p class="text-muted">
                            {{ $route->route_Sname}}
                        </p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Long Name</strong>

                        <p class="text-muted">
                            {{ $route->route_Lname }}
                        </p>
                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Description</strong>

                        <p class="text-muted">
                            {{ $route->route_desc }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Type</strong>

                        <p class="text-muted">
                            {{ $route->route_type }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Color</strong>

                        <p class="text-muted">
                            {{ $route->route_color }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-phone margin-r-5"></i> Text Color</strong>

                        <p class="text-muted">
                            {{ $route->route_txtColor }}
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-o margin-r-5"></i> Agence</strong>

                        <p class="text-muted">
                            {{ $route->agence->agence_name }}
                        </p>

                        <hr>


                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
        </div>
    </section>

@endsection