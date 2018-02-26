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
                        <h3 class="box-title">Nouveau horaires</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('stops_time.store') }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="arrived_time">arrived_time</label>
                                <input type="time" class="form-control" name="arrived_time" id="arrived_time" placeholder="arrived_time">
                            </div>

                            <div class="form-group">
                                <label for="departure_time">departure_time</label>
                                <input type="time" class="form-control" name="departure_time" id="departure_time" placeholder="departure_time">
                            </div>

                            <div class="form-group">
                                <label for="stop_sequence">stop_sequence</label>
                                <input type="text" class="form-control" name="stop_sequence" id="stop_sequence" placeholder="stop_sequence">
                            </div>


                         <div class="form-group">
                                <label>trip</label>
                                <select class="form-control select2" style="width: 100%;" name="agence_id" id="agence_id">
                                     @foreach(App\Trip::all() as $trip)
                            <option value="{{$trip->id}}">{{$trip->trip_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label>trip</label>
                            <select class="form-control select2" style="width: 100%;" name="agence_id" id="agence_id">
                                @foreach(App\Stop::all() as $stop)
                                    <option value="{{$stop->id}}">{{$trip->stop_id}}</option>
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