<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>My Map</title>
  <style>
    .map_wrapper {
      position: relative;
      width: 60%;
      padding-top:56.25%;
      border: 1px solid black;
    }
    .map_wrapper .target {
      position: absolute; 
      width: 100%; 
      height: 100%; 
      top: 0;
      left: 0;
    }
    

  </style>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
  <div class="map_wrapper">
  <div id="target" class="target"></div>
  </div>
  <input type="text" id="address">
  <button id="search">検索</button>
  <input type="text" id="search_results" size="50">
  <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyCEpTH_YohJFB9n-B458TcUx9ViiaP1y4M&callback=initMap" async defer></script>
  <script>
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
    (function($, window) {
  $(function() {$('.slider').slick({
    autoplay:true,
    autoplaySpeed:5000,
    dots:true,
  });
 });
})(jQuery, window);
    </script>
</body>
</html>