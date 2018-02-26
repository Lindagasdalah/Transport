@extends('layouts.main')

@section('content')
    <style>
        #map{
            height:400px;
            width:100%;
        }
        .delete-menu {
            position: absolute;
            background: white;
            padding: 3px;
            color: #666;
            font-weight: bold;
            border: 1px solid #999;
            font-family: sans-serif;
            font-size: 12px;
            box-shadow: 1px 3px 3px rgba(0, 0, 0, .3);
            margin-top: -10px;
            margin-left: 10px;
            cursor: pointer;
        }
        .delete-menu:hover {
            background: #eee;
        }
    </style>
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
                        <h3 class="box-title">Nouveau route</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{ route('routes.store') }}">

                        {{ csrf_field() }}
                        <div id="map"></div>

                        <div class="box-body">

                            <div class="form-group">
                                <label for="route_Sname">Short Name</label>
                                <input type="text" class="form-control" name="route_Sname" id="route_Sname" placeholder="Short Name">
                            </div>

                            <div class="form-group">
                                <label for="route_Lname">Long Name</label>
                                <input type="text" class="form-control" name="route_Lname" id="route_Lname" placeholder="Long name">
                            </div>

                            <div class="form-group">
                                <label for="route_desc">Description</label>
                                <input type="text" class="form-control" name="route_desc" id="route_desc" placeholder="Description">
                            </div>

                            <div class="form-group">
                                <label for="route_type">Type</label>
                                <input type="text" class="form-control" name="route_type" id="route_type" placeholder="Type">
                            </div>

                            <div class="form-group">
                                <label for="route_color">Color</label>
                                <input type="color" id="colorWell"  class="form-control" name="route_color"  placeholder="Color">
                            </div>

                            <div class="form-group">
                                <label for="route_txtColor">Coordonné</label>
                                <input type="text" class="form-control" name="coordlist" id="coord" placeholder="Coordonné">
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
    <script>
       /* var defaultColor = "#0000ff";
        function updateFirst(event) {
            var colorWell = document.querySelector("#colorWell");
            if (colorWell) {
                colorWell.value = event.target.value;
            }
        }function updateAll(event) {
            document.querySelectorAll("colorWell").forEach(function(colorWell) {
                colorWell.value = event.target.value;
            });
        }*/
        var poly;
        var map;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 7,
                    center: {lat: 36.8189700, lng: 10.1657900}  // Center the map on Chicago, USA.
                });

                colorWell = document.querySelector("#colorWell");
               colorWell.value = defaultColor;
                colorWell.addEventListener("input", updateFirst, false);
                colorWell.addEventListener("change", updateAll, false);
                colorWell.select();
                poly = new google.maps.Polyline({
                    strokeColor: colorWell.value,
                    strokeOpacity: 1.0,
                    strokeWeight: 3
                });
                poly.setMap(map);
                // Add a listener for the click event
                map.addListener('click', addLatLng);
            }

var chaine="";
            // Handles click events on a map, and adds a new point to the Polyline.
            function addLatLng(event) {


                var path = poly.getPath();
                // Because path is an MVCArray, we can simply append a new coordinate
                // and it will automatically appear.
                path.push(event.latLng);
                var markerLat = (event.latLng.lat()).toFixed(6);
                var markerLng = (event.latLng.lng()).toFixed(6);
                if (event)
                chaine= chaine +markerLat+" , "+markerLng+",";
                $("#coord").val(chaine);
                // Add a new marker at the new plotted point on the polyline.
                var marker = new google.maps.Marker({
                    position: event.latLng,
                    title: '#' + path.getLength(),
                    map: map
                });



        }


    </script>
    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCICVFZg9PawAeVO5oH_BRdE7IEu93eG8E&callback=initMap">
    </script>

@endsection