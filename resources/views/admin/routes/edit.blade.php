@extends('layouts.main')

@section('content')

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Modifier route</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('routes.update', $route->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="route_Sname">Short name</label>
                                <input value="{{ $route->route_Sname }}" type="text" class="form-control" name="route_Sname" id="route_Sname" placeholder="Short name">
                            </div>

                            <div class="form-group">
                                <label for="route_Lname">Long Name</label>
                                <input value="{{ $route->route_Lname }}" type="text" class="form-control" name="route_Lname" id="route_Lname" placeholder="Long Name">
                            </div>

                            <div class="form-group">
                                <label for="route_desc">Description</label>
                                <input value="{{ $route->route_desc }}" type="text" class="form-control" name="route_desc" id="route_desc" placeholder="Description">
                            </div>

                            <div class="form-group">
                                <label for="route_type">Type</label>
                                <input value="{{ $route->route_type }}" type="text" class="form-control" name="route_type" id="route_type" placeholder="Type">
                            </div>
                            <div class="form-group">
                                <label for="login">Color</label>
                                <input  value="{{ $route->route_color }}" type="text" class="form-control" name="route_color" id="route_color" placeholder="Color">
                            </div>

                            <div class="form-group">
                                <label for="route_txtColor">Text Color</label>
                                <input  value="{{ $route->route_txtColor }}" type="text" class="form-control" name="route_txtColor" id="route_txtColor" placeholder="Text Color">
                            </div>
                            <div class="form-group">
                                <label>Agence</label>
                                <select class="form-control select2" style="width: 100%;" name="agence_id" id="agence_id">
                                    @foreach(App\Agence::all() as $agence)
                                        <option value="{{$agence->id}}">{{$agence->nom}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Confirmer</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </div>
        </div>
    </section>



@endsection