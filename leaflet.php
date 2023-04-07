<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Leaflet CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <!-- Add Leaflet Routing Machine CSS link -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.css" />
    <style>
        #mapid {
            height: 500px;
        }
    </style>
    <title>Leaflet Routing Example</title>
</head>

<body>
    <div id="mapid"></div>

    <!-- Add Leaflet and Leaflet Routing Machine JS links -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.min.js">
    </script>

    <script>
        var map = L.map('mapid').setView([-8.047318979270893, 111.41082593285564], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        var startMarker = L.marker([-8.047318979270893, 111.41082593285564]).addTo(map);
        var endMarker = L.marker([-7.647216910701954, 111.52668697607454]).addTo(map);

        L.Routing.control({
            waypoints: [
                L.latLng(-8.047318979270893, 111.41082593285564),
                L.latLng(-7.647216910701954, 111.52668697607454)
            ],
            routeWhileDragging: true
        }).addTo(map);
    </script>
</body>

</html>