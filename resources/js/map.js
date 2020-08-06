function initMap() {
      'use strict';

      var target = document.getElementById('target');
      var map = new google.maps.Map(target, {
        center: {lat: 34.964506, lng: 135.710373},
        zoom: 15,
        clickableIcons: false
      });
      var geocoder = new google.maps.Geocoder();

      document.getElementById('search').addEventListener('click', function() {
        geocoder.geocode({
          address: document.getElementById('address').value
        }, function(results, status) {
          if (status !== 'OK') {
            alert('失敗しました');
            return;
          }
          if (results[0]) {
           var new_map = new google.maps.Map(target, {
              center: results[0].geometry.location,
              zoom: 15,
              clickableIcons: false
            });
            new_map.addListener('dblclick', function(e) {
        geocoder.geocode({
          location: e.latLng
        }, function(results, status) {
          if (status !== 'OK') {
            alert('失敗しました');
            return;
          }
          if (results[0]) {
            var new_marker = new google.maps.Marker({
              position: e.latLng,
              map: new_map,
              title: results[0].formatted_address,
              animation: google.maps.Animation.DROP
            });
            var new_infoWindow = new google.maps.InfoWindow({
              content: results[0].formatted_address
            });
            new_marker.addListener('click', function() {
             new_infoWindow.open(map, new_marker);
            });
             document.getElementById("search_results").value = results[0].formatted_address;
          } else {
            alert('データを取得できませんでした');
            return;
          }
        });
            });

          } else {
            alert('データを取得できませんでした');
            return;
          }
        });
      });

      map.addListener('dblclick', function(e) {
        geocoder.geocode({
          location: e.latLng
        }, function(results, status) {
          if (status !== 'OK') {
            alert('失敗しました');
            return;
          }
          if (results[0]) {
            var marker = new google.maps.Marker({
              position: e.latLng,
              map: map,
              title: results[0].formatted_address,
              animation: google.maps.Animation.DROP
            });
            var infoWindow = new google.maps.InfoWindow({
              content: results[0].formatted_address
            });
            marker.addListener('click', function() {
             infoWindow.open(map, marker);
            });
             document.getElementById("search_results").value = results[0].formatted_address;
          } else {
            alert('データを取得できませんでした');
            return;
          }
        });
      });
    }