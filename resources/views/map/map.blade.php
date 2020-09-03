<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>撮影地登録</title>
  <style>
    body {
      background: #EEEEEE;
    }
    
    .content {
      background: #FFFFDD;
      border-radius: 4px;
    }
    .container {
      width: 1000px;
      margin: 0 auto 40px auto;
    }
    
    .header-title-area {
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .logo {
      font-size: 32px;
    }
    .text-sub {
      color: #777;
    }
    
    .target {
      width: 1000px;
      height: 500px;
      margin: 0 auto 40px auto;
    }
    
  </style>
  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
</head>
<body>
  <div class="container">
    <div class="header-title-area">
      <h1 class="logo">Train View For Child</h1>
      <p class="text-sub">大好きな子供と大好きな列車を。</p>
    </div>
    <div class="col-md-4">
        　　<a href="{{ action('PostsController@index') }}" role="button" class="btn btn-success btn-sm">ホーム画面に戻る</a>
        </div>
    <div class="map_wrapper">
      <div id="target" class="target"></div>
    </div>
    <div class="content">
      <p>＊撮影した場所を地図上でダブルクリックし、送信ボタンを押してください＊</p>
      <input type="text" id="address">
      <button id="search">検索</button>
    <form action="{{ action('AddressController@write1') }}" method="post" enctype="multipart/form-data">
          @csrf
      <input type="text" id="search_results" size="50" name="textbox1">
      <input type="submit" value="送信ボタン" >
    </form>
    </div>
  </div>
  <div class="container">
  <footer>
  </footer>
  </div>
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