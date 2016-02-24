(function ($) {
    $(document).ready(function () {
        //search
        var substringMatcher = function (strs) {
            return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function (i, str) {
                    if (substrRegex.test(str)) {
                        matches.push(str);
                    }
                });

                cb(matches);
            };
        };


        $('.office-search-box input#search').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        },
        {
            name: 'states',
            source: substringMatcher(TRANSPORT_LOCATIONS.country)
        });

        /*   $('.office-search-box input#search').typeahead({
         minLength: 1,
         highlight: true
         },
         {
         displayKey: 'title',
         source:  markers
         });*/


        var styledMap;

// Set style
        var styles = [
            {
                featureType: "all",
                elementType: "all",
                stylers: [
                    {saturation: -100} // <-- THIS
                ]
            }
        ];


// call style map
        styledMap = new google.maps.StyledMapType(styles,
                {name: "Styled Map"});


        // define map options
        var mapOptions = {
            center: new google.maps.LatLng(TRANSPORT_LOCATIONS.map[0].lat, TRANSPORT_LOCATIONS.map[0].lng),
            zoom: 11,
            scrollwheel: false

        };

        // create infowindo object..
        // var infoWindow = new google.maps.InfoWindow();
        // create map object

        var map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);

        var boxText = document.createElement("div");


        var myOptions = {
            content: boxText
            , disableAutoPan: false
            , maxWidth: 0
            , pixelOffset: new google.maps.Size(10, 50)
            , zIndex: 1
            , boxStyle: {
                background: "url('tipbox.gif') no-repeat"
                , opacity: 1
                , width: 'auto'
            }
            , closeBoxMargin: "10px 2px 2px 2px"

            , infoBoxClearance: new google.maps.Size(5, 5)
            , isHidden: false
            , pane: "floatPane"
            , enableEventPropagation: false
        };



        var i = 0;
        // Set interval
        var interval = setInterval(function () {

            var data = TRANSPORT_LOCATIONS.map[i]
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            // define markar option
            var marker = new google.maps.Marker({
                position: myLatlng,
                icon: TRANSPORT_LOCATIONS.theme_url + "/assets/images/marker.png",
                map: map,
                title: data.title,
                animation: google.maps.Animation.DROP
            });

            // set style
            // map.mapTypes.set('map_style', styledMap);
            // map.setMapTypeId('map_style');
            // generate markar and set markar
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    // infoWindow.setContent(data.description);
                    //infowindow.open(map, marker);
                    // boxText.innerHTML = data.description;
                    ib.open(map, marker)
                    map.panTo(myLatlng);
                });
            })(marker, data);
            // var ib = new InfoBox(myOptions);
            //ib.open(map, this)
            i++;
            if (i == TRANSPORT_LOCATIONS.map.length) {
                clearInterval(interval);
            }
        }, 200);
        $('#countries li a').click(function () {
            var lat = $(this).attr('data-lat');
            var lng = $(this).attr('data-lng');
            var center = new google.maps.LatLng(lat, lng);
            map.panTo(center);
        });

    });
})(jQuery);