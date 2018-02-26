<script src="https://googleapi.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
{{Form::open(array('url'=>'/vendor/add','file'=>true))}}
    <div class="form-group">
        <label for="">Titre</label>
        <input type="text" class="form-contol input-sm" name="title">
    </div>
    <div class="form-group">
        <label for="">Map</label>
        <input type="text" id="searchmap" >
        <div id="googleMap"></div>
    </div>
    <div class="form-group">
        <label for="">Lat</label>
        <input type="text" id="lat" name="lat" class="form-contol input-sm" >
    </div>
    <div class="form-group">
        <label for="">Lng</label>
        <input type="text" id="lng" name="lng" class="form-contol input-sm" >
    </div>
    <button class="btn btn-sm btn-danger">save</button>
{{Form::close()}}
<script>
    var map = new google.maps.Map(document.getElementById('googleMap'),{center:{lat:27.72,ln:85.36},zoom:15});
</script>