@extends('layouts.train')
@section('title', '列車接近情報　京都方面行き')
@section('content')
<div id="map">
   <div>
		<div id="osaka">
			<span id="osatime"></span>
			<img src="/images/station.png">
			<span>大阪</span>
		</div>
		<div id="shinosaka">
			<span id="shintime"></span>
			<img src="/images/station.png">
			<span>新大阪</span>
		</div>
		<div id="takatsuki">
			<span id="takatime"></span>
			<img src="/images/station.png">
			<span>高槻</span>
		</div>
		<div id="katsuragawa">
			<span id="katsutime"></span>
			<img src="/images/station.png">
			<span>桂川</span>
		</div>
		<div id="kyoto">
			<span id="kyotime"></span>
			<img src="/images/station.png">
			<span>京都</span>
		</div>
	</div>
	<img id="express" src="/images/express1.png">
	<img id="line" src="/images/line.png">
	<div id="info">
		<span id="nowdate"></span>：<span id="name"></span>：<span id="number"></span>
	</div>
</div>
<div class="col-md-4">
        　　<a href="{{ action('PostsController@index') }}" role="button" class="btn btn-success btn-sm">ホーム画面に戻る</a>
        </div>
@endsection