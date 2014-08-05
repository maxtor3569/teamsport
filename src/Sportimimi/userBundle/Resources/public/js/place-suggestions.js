var map;
var service;
var infowindow;
var pos;
var request;
var markers = [];
var searchData;

function initializePlaceSuggest() {
    map = new google.maps.Map(document.getElementById('place-suggestion-map'), {
        zoom: 12
    });

    // Try HTML5 geolocation
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            pos = new google.maps.LatLng(position.coords.latitude,
                position.coords.longitude);

            map.setCenter(pos);

            request = {
                location: pos,
                radius: '5000',
                //query: 'vidal 3628, capital federal'
                query: 'futbol'
            };

            infowindow = new google.maps.InfoWindow();
            service = new google.maps.places.PlacesService(map);
            //service.textSearch(request, callback);

        }, function() {
            handleNoGeolocation(true);
        });
    } else {
        // Browser doesn't support Geolocation
        handleNoGeolocation(false);
    }
}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        searchData = {results: []};
        for (var i = 0; i < results.length; i++) {
            var place = results[i];
            //createMarker(results[i]);
            service.getDetails({placeId: place.place_id}, placeCallback);
        }
        $('#place_played').select2({query:function(query){
            query.callback(data);
        }});
    }
}

function createMarker(place) {
    var placeLoc = place.geometry.location;
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
        var request = {
            placeId: 'ChIJN1t_tDeuEmsRUsoyG83frY4'
        };
        service.getDetails({placeId: place.place_id}, placeCallback);

    });
    markers.push(marker);
}

function placeCallback(place, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        //createMarker(place);
        var address = place.formatted_address;
        searchData.results.push({text: address});
//        $('#place_played').select2({query:function(query){
//            var data = {results: []};
//            data.results.push({id: address, text: address});
//            query.callback(data);
//        }});
        //played.select2('destroy'); played.select2();
        //console.log($('#place_played').select2('data'));
    }
}


function setAllMap(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setAllMap(null);
}

function handleNoGeolocation(errorFlag) {
    if (errorFlag) {
        var content = 'Error: The Geolocation service failed.';
    } else {
        var content = 'Error: Your browser doesn\'t support geolocation.';
    }

    var options = {
        map: map,
        position: new google.maps.LatLng(60, 105),
        content: content
    };

    var infowindow = new google.maps.InfoWindow(options);
    map.setCenter(options.position);
}

function updatePlaceSuggestion(search_query)
{
    request.query = search_query;
    clearMarkers();
    service.textSearch(request, callback);
}