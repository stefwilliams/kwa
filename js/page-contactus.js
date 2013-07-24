      var map;
      //var icon = new google.maps.MarkerImage("http://cdn3.iconfinder.com/data/icons/places/100/map_pin_big_1-24.png");
      var icon = new google.maps.MarkerImage("/wp-content/themes/lmw/img/map_marker.png");
      var latLng;
      var marker;
      var bounds = new google.maps.LatLngBounds();


      function initialize() {
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false
        };
        
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      }
      
      jQuery(function(){
        initialize();
        jQuery ("[data-office]").each(function(){
          var officelat = jQuery(this).attr("data-lat");
          var officelong = jQuery(this).attr("data-long");

            latLng = new google.maps.LatLng(officelat, officelong);
            
            marker = new google.maps.Marker();
            marker.setMap(map);
            marker.setIcon(icon);
            marker.setPosition(latLng);
            bounds.extend(latLng);
       });
        map.fitBounds(bounds);
    });