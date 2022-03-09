/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
import 'leaflet/dist/leaflet';
// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';
import OpenLayers from "leaflet";

import {map} from "./maps";


// if(navigator.geolocation){
//     map.locate({setView: true, maxZoom: 16});
//
//     // navigator.geolocation.getCurrentPosition(getPosition);
// }
global.markerWarehouse = L.icon({
    iconUrl:'/icons/warehouse.png',
    iconSize: [55, 45]
});
global.markerStore = L.icon({
    iconUrl:'/icons/store.png',
    iconSize: [55, 45]
});
global.map = map;
global.L = L;
// L.marker([40.482768, -3.607268],{icon:markerWarehouse}).addTo(map);
