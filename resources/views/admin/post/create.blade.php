@extends('layouts.admin')
@section('title', '投稿新規作成')
@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h7 mb-4">
                投稿の新規作成
            </h1>

            <form action="{{ action('Admin\PostController@create') }}" method="post" enctype="multipart/form-data">
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
                        <label for="place">撮影場所の住所</label>
                            <input type="text" id="search_results" class="form-control" name="place" value="{{$data1['textbox1']}}">
                    </div>
                    <div class="form-group">
                       <label>撮影日時</label><br>
                       <input type="date" name="day" value="day" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input
                            id="title"
                            name="title"
                            class="form-control"
                            value="{{ old('title') }}"
                            type="text"
                            placeholder="タイトル入力"
                        >
                    </div>
                    <div class="form-group">
                        <label for="content">本文</label>
                        <textarea
                            id="content"
                            name="content"
                            class="form-control"
                            rows="6"
                            placeholder="本文入力"
                        >{{ old('content') }}</textarea>
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
                        <label for="image">列車の写真</label>
                            <input type="file" class="form-control-file" name="image">
                    </div>
                    <div class="mt-5">
                        <a class="btn btn-secondary" href="">キャンセル</a>
                         {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection