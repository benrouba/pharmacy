function initMap() {
    const LatLng = {
        lat: 36.7605773,
        lng: 8.0560736
    };

    var mapProp = {
        center: LatLng,
        zoom: 10,
        styles: [{
                "stylers": [{
                        "hue": "#007fff"
                    },
                    {
                        "saturation": 89
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [{
                    "color": "#ffffff"
                }]
            },
            {
                "featureType": "administrative.country",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }
        ]

    };
    new google.maps.Marker({
        position: LatLng,
        map,
        title: "Hello World!",
    });
    const marker = new google.maps.Marker({
        position: LatLng,
        map: map
    });


    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp, marker);
    marker.setMap(map);
}
