function init () {

    start = '55.45,65.3333'; // start coordinates
    zoom = 16;                      // start zoom
    id = 'map';

    start = start.split(',');       // split coordinates to array

    lat = start[0];
    long = start[1];
    coords = [lat, long];
    Map = new ymaps.Map(id, {    // initialize map
        center: coords,
        zoom: zoom,
        controls: ['zoomControl']
    });

    /* Adding search on map */
    var search = new ymaps.control.SearchControl({
        options: {
            float: 'left',
            floatIndex: 100,
            noPlacemark: true
        }
    });
    Map.controls.add(search);

    /* Addung mark on map*/
    mark = new ymaps.Placemark([lat, long],{}, {preset: "islands#redIcon", draggable: true});
    Map.geoObjects.add(mark);

    /* Event drag mark */
    mark.events.add("dragend", function () {
        coords = this.geometry.getCoordinates();
        save();
    }, mark);

    /* Event click */
    Map.events.add('click', function (e) {
        coords = e.get('coords');
        save();
    });


    /* Event search */
    search.events.add("resultselect", function () {
        coords = search.getResultsArray()[0].geometry.getCoordinates();
        save();
    });
}
/* Save value in form */
function save (){
    var new_coords_x = [coords[0].toFixed(6)];
    var new_coords_y = [coords[1].toFixed(6)];
    mark.getOverlaySync().getData().geometry.setCoordinates(new_coords_y);
    mark.getOverlaySync().getData().geometry.setCoordinates(new_coords_x);
    document.getElementById("cord_x").value = new_coords_x;
    document.getElementById("cord_y").value = new_coords_y;
}

ymaps.ready(init);