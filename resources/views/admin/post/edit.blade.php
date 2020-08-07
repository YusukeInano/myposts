@extends('layouts.admin')
@section('title', '投稿の編集')
@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h7 mb-4">
                投稿の編集
            </h1>

            <form action="{{ action('Admin\PostController@update') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif

                <fieldset class="mb-4">
                    <div class="form-group">
                       <label>撮影日時</label><br>
                       <input type="date" name="day" value="{{ $posts_form->day }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input id="title" name="title" class="form-control" value="{{ $posts_form->title }}" type="text">
                    </div>
                    <div class="form-group">
                        <label for="content">本文</label>
                        <textarea id="content" name="content" class="form-control" rows="6">{{ $posts_form->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="train_id">列車名</label>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="haruka" value="はるか" checked>
                          <label class="form-check-label" for="haruka">はるか</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="thunderbird" value="サンダーバード">
                          <label class="form-check-label" for="thunderbird">サンダーバード</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="kuroshio" value="くろしお">
                          <label class="form-check-label" for="kuroshio">くろしお</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="hakuto" value="スーパーはくと">
                          <label class="form-check-label" for="hakuto">スーパーはくと</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="hida" value="ワイドビューひだ">
                          <label class="form-check-label" for="hida">ワイドビューひだ</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="rocal" value="普通">
                          <label class="form-check-label" for="rocal">普通</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="rapid" value="快速">
                          <label class="form-check-label" for="rapid">快速</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="special_rapid" value="新快速">
                          <label class="form-check-label" for="special_rapid">新快速</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="out_of" value="回送">
                          <label class="form-check-label" for="out_of">回送</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="kamotsu" value="貨物列車">
                          <label class="form-check-label" for="kamotsu">貨物列車</label>
                        </div>
                        <div class="form-check" id="train_id" name="train_id">
                          <input class="form-check-input" type="radio" name="train_id" id="else" value="その他">
                          <label class="form-check-label" for="else">その他</label>
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="form-check" for="image">列車の写真</label>
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                            　　　　{{ $posts_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="place">撮影場所の住所</label>
                            <input type="text" id="search_results" class="form-control" name="place" value="{{ $posts_form->place }}">
                    </div>
                    <div class="map_wrapper">
                        <div id="target" class="target">
                        </div>
                    </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                        <input type="text" id="address" class="form-control">
                            </div>
                            <div class="form-group col-sm-1">
                        <button id="search" class="form-control btn btn-success">検索</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $posts_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-warning btn-block btn-lg" value="更新">
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection