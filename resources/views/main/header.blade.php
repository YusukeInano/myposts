<div class="container">
    <div class="header-title-area">
      <h1 class="logo">Train View For Child</h1>
      <p class="text-sub">大好きな子供と大好きな列車を。</p>
    </div>
    <div class="slider">
      <div class="Local">
      <img src="{{secure_asset('/images/Local.JPG')}}" alt="image01">
      </div>
      <div class="Panda">
      <img src="{{secure_asset('/images/Panda.JPG')}}" alt="image02">
      </div>
      <div class="SRS">
      <img src="{{secure_asset('/images/SRS.JPG')}}" alt="image03">
      </div>
      <div class="TB">
      <img src="{{secure_asset('/images/TB.JPG')}}" alt="image04">
      </div>
    </div>
    <ul class="header-navigation">
      <li><a href="{{ action('PostsController@index') }}">ホーム画面</a></li>
      <li><a href="{{ action('Admin\ProfileController@add') }}" method="get">新規ユーザー登録</a></li>
      <li><a href="{{ action('MapController@showMap') }}" method="get">新規投稿登録</a></li>
      <li><a href="{{ action('MapController@showKatsuragawa') }}" method="get">JR桂川駅通過時刻</a></li>
      <li><a href="{{ action('MapController@showTrain') }}" method="get">列車接近上り</a></li>
      <li><a href="{{ action('MapController@showTrain1') }}" method="get">列車接近下り</a></li>
    </ul>
  </div>