<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ secure_asset('js/admin_jquery.js') }}"></script>
        <script src="{{ secure_asset('js/map.js') }}"></script>
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
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
    
    
        </script>
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header class="header">
                @include('layouts.header')
            </header>
            <main class="py-4">
                @yield('content')
            </main>
            <footer class="footer bg-dark fixed-bottom">
                @include('layouts.footer')
            </footer>
        </div>
    </body>
</html>