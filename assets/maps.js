import OpenLayers from "leaflet";

export var map;

function addMarker(position) {
    var markers = new OpenLayers.Layer.Markers("Markers");
    map.addLayer(markers);
    markers.addMarker(new OpenLayers.Marker(position));
};

export function getPosition(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    // var fromProjection = L.Projection("EPSG:4326");   // Transform from WGS 1984
    // var toProjection   = L.Projection("EPSG:900913"); // to Spherical Mercator Projection

    var position = L.LonLat(longitude,latitude);//.transform(fromProjection, toProjection);
    var zoom = 18; //maximum value

    addMarker(position);
    map.setCenter(position, zoom);
    // findLocations(latitude, longitude, fromProjection, toProjection);
}

map = L.map('map').setView([37.1698, -3.965], 18);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 25,
    attribution: 'Datos del mapa de &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a>, ' + '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' + 'Imágenes © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'
}).addTo(map);

global.marker = L.icon({
    iconUrl:'/build/images/marker-icon.2b3e1faf.png',
    iconSize: [25, 41]
});


function onLocationFound(e) {
    // var radius = e.accuracy / 2;
    L.marker(e.latlng,{icon:marker}).addTo(map)
        // .bindPopup("You are within " + radius + " meters from this point").openPopup();
    // L.circle(e.latlng, radius).addTo(map);
}
map.on('locationfound', onLocationFound);

map.locate({setView: true, maxZoom: 16});

