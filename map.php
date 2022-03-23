<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
            width: 100vw;
            height: 100%;
        }

        #map {
            width: 100vw;
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
    <script src="js/leaflet-measure.js"></script>
    <script src="data/yakutsk_1.js"></script>
    <script src="data/dots_2.js"></script>
    <script src="data/store_3.js"></script>
    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [61.971343872699684, 129.59516338176974],
            [62.04369663121651, 129.83872583845266]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix(
            '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
            );
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'feet',
            secondaryLengthUnit: 'miles',
            primaryAreaUnit: 'sqfeet',
            secondaryAreaUnit: 'sqmiles'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}
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

        function pop_yakutsk_1(feature, layer) {

        }

        function style_yakutsk_1_0(feature) {
            switch (String(feature.properties['dist'])) {
                case 'Автодожный округ':
                    return {
                        pane: 'pane_yakutsk_1',
                            opacity: 1,
                            color: 'rgba(247,247,247,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(114,152,218,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Автодорожный (набережная)':
                    return {
                        pane: 'pane_yakutsk_1',
                            opacity: 1,
                            color: 'rgba(247,247,247,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 0.5,
                            fillColor: 'rgba(135,229,76,1.0)',
                            interactive: true,
                    }
                    break;
                default:
                    return {
                        pane: 'pane_yakutsk_1',
                            opacity: 1,
                            color: 'rgba(247,247,247,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,56,111,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_yakutsk_1');
        map.getPane('pane_yakutsk_1').style.zIndex = 401;
        map.getPane('pane_yakutsk_1').style['mix-blend-mode'] = 'normal';
        var layer_yakutsk_1 = new L.geoJson(json_yakutsk_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_yakutsk_1',
            layerName: 'layer_yakutsk_1',
            pane: 'pane_yakutsk_1',
            onEachFeature: pop_yakutsk_1,
            style: style_yakutsk_1_0,
        });
        bounds_group.addLayer(layer_yakutsk_1);
        map.addLayer(layer_yakutsk_1);

        function pop_dots_2(feature, layer) {
            //Оптовые
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties[
                'id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><a href="#">' + (feature.properties['name'] !== null ? autolinker.link(feature
                .properties['name'].toLocaleString()) : '') + '</a></td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_dots_2_0() {
            return {
                pane: 'pane_dots_2',
                radius: 8.0,
                opacity: 1,
                color: 'rgba(36,37,130,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 3.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(246,246,246,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_dots_2');
        map.getPane('pane_dots_2').style.zIndex = 402;
        map.getPane('pane_dots_2').style['mix-blend-mode'] = 'normal';
        var layer_dots_2 = new L.geoJson(json_dots_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_dots_2',
            layerName: 'layer_dots_2',
            pane: 'pane_dots_2',
            onEachFeature: pop_dots_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_dots_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_dots_2);
        map.addLayer(layer_dots_2);

        function pop_store_3(feature, layer) {
            //Разовые
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['id'] !== null ? autolinker.link(feature.properties[
                'id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><a href="#">' + (feature.properties['name'] !== null ? autolinker.link(feature
                .properties['name'].toLocaleString()) : '') + '</a></td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_store_3_0() {
            return {
                pane: 'pane_store_3',
                radius: 8.0,
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
        map.createPane('pane_store_3');
        map.getPane('pane_store_3').style.zIndex = 403;
        map.getPane('pane_store_3').style['mix-blend-mode'] = 'normal';
        var layer_store_3 = new L.geoJson(json_store_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_store_3',
            layerName: 'layer_store_3',
            pane: 'pane_store_3',
            onEachFeature: pop_store_3,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_store_3_0(feature));
            },
        });
        bounds_group.addLayer(layer_store_3);
        map.addLayer(layer_store_3);
        setBounds();
        resetLabels([layer_yakutsk_1]);
        map.on("zoomend", function () {
            resetLabels([layer_yakutsk_1]);
        });
        map.on("layeradd", function () {
            resetLabels([layer_yakutsk_1]);
        });
        map.on("layerremove", function () {
            resetLabels([layer_yakutsk_1]);
        });
    </script>
</body>

</html>