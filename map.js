ymaps.ready(function () {

    var map = new ymaps.Map('map', {
            center: [129.75, 62.04],
            zoom: 12,
            controls: ['zoomControl']
        }),
        objectManager = new ymaps.ObjectManager();
    map.controls.get('zoomControl').options.set({
        size: 'small'
    });

    // Загружаем GeoJSON файл, экспортированный из Конструктора карт.
    $.getJSON('city.geojson')
        .done(function (geoJson) {

            geoJson.features.forEach(function (obj) {
                // Задаём контент балуна.
                obj.properties.balloonContent = obj.properties.description;
                //obj.properties.balloonContent = "<a href='#'>lol</a>"
                // Задаём пресет для меток с полем iconCaption.
                if (obj.properties.iconCaption) {
                    obj.options = {
                        preset: "islands#greenDotIconWithCaption"
                    }
                }
            });
            // Добавляем описание объектов в формате JSON в менеджер объектов.
            objectManager.add(geoJson);
            // Добавляем объекты на карту.
            map.geoObjects.add(objectManager);
        });
});
var one = document.getElementById("1");
console.log(one)