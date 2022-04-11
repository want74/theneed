<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/qgis2web.css"><link rel="stylesheet" href="css/fontawesome-all.min.css">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="data/dist2_1.js"></script>
        <script src="data/prod1_2.js"></script>
        <script src="data/opt1_3.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[61.989826939322995,129.63593502277288],[62.01659894188316,129.72617952693918]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_2GIS_0');
        map.getPane('pane_2GIS_0').style.zIndex = 400;
        var layer_2GIS_0 = L.tileLayer('http://tile1.maps.2gis.com/tiles?x={x}&y={y}&z={z}', {
            pane: 'pane_2GIS_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_2GIS_0;
        map.addLayer(layer_2GIS_0);
        function pop_dist2_1(feature, layer) {
            
        }

        function style_dist2_1_0() {
            return {
                pane: 'pane_dist2_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0.5,
                fillColor: 'rgba(232,113,141,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_dist2_1');
        map.getPane('pane_dist2_1').style.zIndex = 401;
        map.getPane('pane_dist2_1').style['mix-blend-mode'] = 'normal';
        var layer_dist2_1 = new L.geoJson(json_dist2_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_dist2_1',
            layerName: 'layer_dist2_1',
            pane: 'pane_dist2_1',
            onEachFeature: pop_dist2_1,
            style: style_dist2_1_0,
        });
        bounds_group.addLayer(layer_dist2_1);
        map.addLayer(layer_dist2_1);
        function pop_prod1_2(feature, layer) {
            var kk1 = feature.properties['id'] + 201;
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><a href="../mag2.php?store_id='+ kk1 +'">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</a></td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_prod1_2_0() {
            return {
                pane: 'pane_prod1_2',
                radius: 9.600000000000001,
                opacity: 1,
                color: 'rgba(246,76,114,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_prod1_2');
        map.getPane('pane_prod1_2').style.zIndex = 402;
        map.getPane('pane_prod1_2').style['mix-blend-mode'] = 'normal';
        var layer_prod1_2 = new L.geoJson(json_prod1_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_prod1_2',
            layerName: 'layer_prod1_2',
            pane: 'pane_prod1_2',
            onEachFeature: pop_prod1_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_prod1_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_prod1_2);
        map.addLayer(layer_prod1_2);
        function pop_opt1_3(feature, layer) {
            var kk = feature.properties['id'] + 202;
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><a href="../mag2.php?store_id='+ kk +'">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</a></td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_opt1_3_0() {
            return {
                pane: 'pane_opt1_3',
                radius: 9.600000000000001,
                opacity: 1,
                color: 'rgba(47,47,162,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,255,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_opt1_3');
        map.getPane('pane_opt1_3').style.zIndex = 403;
        map.getPane('pane_opt1_3').style['mix-blend-mode'] = 'normal';
        var layer_opt1_3 = new L.geoJson(json_opt1_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_opt1_3',
            layerName: 'layer_opt1_3',
            pane: 'pane_opt1_3',
            onEachFeature: pop_opt1_3,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_opt1_3_0(feature));
            },
        });
        bounds_group.addLayer(layer_opt1_3);
        map.addLayer(layer_opt1_3);
        setBounds();
        </script>
    </body>
</html>
