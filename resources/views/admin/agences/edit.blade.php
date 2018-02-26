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
                        <h3 class="box-title">Modifier agence</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('agences.update', $agence->id) }}">

                        {{ csrf_field() }}

                        <div class="box-body">

                            <div class="form-group">
                                <label for="agence_name">agence name</label>
                                <input value="{{ $agence->agence_name }}" type="text" class="form-control" name="agence_name" id="agence_name" placeholder="agence_name">
                            </div>

                            <div class="form-group">
                                <label for="agence_url">agence url</label>
                                <input value="{{ $agence->agence_url }}" type="text" class="form-control" name="agence_url" id="agence_url" placeholder="agence_url">
                            </div>

                            <div class="form-group">
                                <label for="agence_timezone">agence timezone</label>
                                <input value="{{ $agence->agence_timezone }}" type="time" class="form-control" name="agence_timezone" id="agence_timezone" placeholder="agence_timezone">
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