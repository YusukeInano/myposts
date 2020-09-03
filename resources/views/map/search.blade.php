<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>撮影場所</title>
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
  <div class="container" id="container">
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
    <div class="form-group">
        <input type="hidden" id="place" class="form-control" name="place" value="{{$data2['textbox2']}}">
        <button id="search">撮影場所を表示する</button>
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
      var map;
      var katsuragawa = {lat: 34.964506, lng: 135.710373};
      var geocoder = new google.maps.Geocoder();
      var marker;

      map = new google.maps.Map(target, {
        center: katsuragawa,
        zoom: 15
      });

      marker = new google.maps.Marker({
        position: katsuragawa,
        map: map,
        title: '撮影地はここ',
        animation: google.maps.Animation.BOUNCE
      });
      
       document.getElementById('search').addEventListener('click', function() {
        geocoder.geocode({
          address: document.getElementById('place').value
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
        　

          } else {
            alert('データを取得できませんでした');
            return;
          }
        });
      });
      
    }
    </script>
</body>
</html>