@extends('layouts.katsuragawa')
@section('title', 'JR桂川駅　電光掲示板')
@section('content')
<div class="container">
    <h1>＜JR桂川駅＞　特急通過時刻</h1>
    <p class="btn"><a onClick="sound()">列車接近音</a></p>
        <audio id="sound" preload="auto">
           <source src="sound/kyoto.wav" type="audio/wav">
       </audio>
		<div class="content">
      <img src="img/456.png" alt="">
        <div id="trains" class="trains">
          <div id="train0" class="train0">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/7.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train0_2" class="train0_2">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/7.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train0_3" class="train0_3">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/7.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train1" class="train1">
            <span class="type"><img src="img/kansai-ap-ltd-exp-ja.png"></span>
            <span class="name"><img src="img/haruka-ja.png"></span>
            <span class="name1"><img src="img/3.png"></span>
            <span class="name2"><img src="img/9.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/3.png"></span>
            <span class="time5"><img src="img/4.png"></span>
            <span class="destination"><img src="img/kansai-airport-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train2" class="train2">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/9.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/3.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train2_0" class="train2_0">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/9.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/3.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train3" class="train3">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/3.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/1.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train3_0" class="train3_0">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/3.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/1.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train3_1" class="train3_1">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/3.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/1.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train4" class="train4">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/hakuto.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/3.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train4_0" class="train4_0">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/hakuto.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/3.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train4_1" class="train4_1">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/hakuto.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/3.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train4_2" class="train4_2">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/hakuto.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/5.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/3.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train5" class="train5">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/5.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train6" class="train6">
            <span class="type"><img src="img/kansai-ap-ltd-exp-ja.png"></span>
            <span class="name"><img src="img/haruka-ja.png"></span>
            <span class="name1"><img src="img/3.png"></span>
            <span class="name2"><img src="img/5.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/3.png"></span>
            <span class="time5"><img src="img/4.png"></span>
            <span class="destination"><img src="img/kansai-airport-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train7" class="train7">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/2.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/2.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train7_0" class="train7_0">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/2.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/2.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train8" class="train8">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/hakuto.png"></span>
            <span class="name2"><img src="img/9.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/5.png"></span>
            <span class="time5"><img src="img/6.png"></span>
            <span class="destination"><img src="img/tottori-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train9" class="train9">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/kansai-ap-ltd-exp-ja.png"></span>
            <span class="name"><img src="img/haruka-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/5.png"></span>
            <span class="time5"><img src="img/9.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train9_0" class="train9_0">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/kansai-ap-ltd-exp-ja.png"></span>
            <span class="name"><img src="img/haruka-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/4.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/5.png"></span>
            <span class="time5"><img src="img/9.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train10" class="train10">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/kansai-ap-ltd-exp-ja.png"></span>
            <span class="name"><img src="img/haruka-ja.png"></span>
            <span class="name1"><img src="img/3.png"></span>
            <span class="name2"><img src="img/2.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/5.png"></span>
            <span class="time5"><img src="img/9.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div id="train11" class="train11">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/3.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/5.png"></span>
            <span class="destination"><img src="img/kanazawa-ja.png"></span>
          </div>
          <div id="train12" class="train12">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/1.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/7.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train12_0" class="train12_0">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/1.png"></span>
            <span class="name2"><img src="img/8.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/0.png"></span>
            <span class="time5"><img src="img/7.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train13" class="train13">
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/thunder-bird-ja.png"></span>
            <span class="name1"><img src="img/2.png"></span>
            <span class="name2"><img src="img/0.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/3.png"></span>
            <span class="time5"><img src="img/4.png"></span>
            <span class="destination"><img src="img/osaka-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train14" class="train14">
            <span class="type"><img src="img/kansai-ap-ltd-exp-ja.png"></span>
            <span class="name"><img src="img/haruka-ja.png"></span>
            <span class="name1"><img src="img/3.png"></span>
            <span class="name2"><img src="img/1.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/3.png"></span>
            <span class="time5"><img src="img/4.png"></span>
            <span class="destination"><img src="img/kansai-airport-ja.png"></span>
            <span class="delay"><img src="img/right.png"></span>
          </div>
          <div id="train15" class="train15">
            <span class="left"><img src="img/left.png"></span>
            <span class="type"><img src="img/ltd2.png"></span>
            <span class="name"><img src="img/hakuto.png"></span>
            <span class="name2"><img src="img/6.png"></span>
            <span class="name3"><img src="img/gou.png"></span>
            <span class="time1"><img src="img/1.png"></span>
            <span class="time2"><img src="img/3.png"></span>
            <span class="time3"><img src="img/10.png"></span>
            <span class="time4"><img src="img/4.png"></span>
            <span class="time5"><img src="img/3.png"></span>
            <span class="destination"><img src="img/kyoto-ja.png"></span>
          </div>
          <div class="show0"><span>ようこそ Train View For Childへ　★列車の接近にご注意ください☆</span></div>
				</div>
  </div>
	</div>
	<div class="col-md-4">
        　　<a href="{{ action('PostsController@index') }}" role="button" class="btn btn-success btn-sm">ホーム画面に戻る</a>
        </div>
@endsection