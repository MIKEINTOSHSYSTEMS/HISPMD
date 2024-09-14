<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>MOH HISPMD DHIS2 GeoJSON</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<div id="map"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibWlrZWludG9zaCIsImEiOiJja252dXE0N2EwcTk0MnBta2I2bG10N3p2In0.b3jcnafqcgfGV00t-e_uKQ';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        //style: 'mapbox://styles/mapbox/satellite-v9', // style URL
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        projection: 'globe', //equalEarth //naturalEarth //globe// Display the map as a globe, since satellite-v9 defaults to Mercator
        zoom: 5.7, // starting zoom
        center: [38.7913, 9.0777] //108, 4] // // starting center in [lng, lat]
    });

    map.on('style.load', () => {
        map.setFog({}); // Set the default atmosphere style
    });

    map.on('load', () => {
        map.addSource('hispmd', {
            type: 'geojson',
            // Use a URL for the value for the `data` property.
            //data: 'https://docs.mapbox.com/mapbox-gl-js/assets/hispmd.geojson'
            //data: 'https://hispmd.merqconsultancy.org/api/dhis2/geo/geojsons/MOH_ALL_LEVELS_organisationUnits.geojson'
            data: '../../geo/geojsons/MOH_ALL_LEVELS_organisationUnits.geojson'
        });

        map.addLayer({
            'id': 'hispmd-layer',
            'type': 'circle',
            'source': 'hispmd',
            'paint': {
                'circle-radius': 4,
                'circle-stroke-width': 1,
                'circle-color': 'blue',
                'circle-stroke-color': 'white'
            }
        }
    );
    });

      map.addControl(new mapboxgl.NavigationControl());
</script>

</body>
</html>