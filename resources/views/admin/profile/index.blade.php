@extends('layouts.admin')
@section('title', '登録済投稿者')
@section('content')
<div class="container">
        <div class="row">
            <h2>投稿者一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ProfileController@add') }}" role="button" class="btn btn-primary">新規登録者作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ProfileController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名前で検索</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-success" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-posts col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="3%">ID</th>
                                <th width="13%">名前</th>
                                <th width="5%">性別</th>
                                <th width="25%">住所</th>
                                <th width="30%">自己紹介</th>
                                <th width="15%">子供の年齢</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{ $post->id }}</th>
                                    <td>{{ \Str::limit($post->name, 30) }}</td>
                                    <td>{{ \Str::limit($post->gender, 5) }}</td>
                                    <td>{{ \Str::limit($post->addr21, 100) }}</td>
                                    <td>{{ \Str::limit($post->introduction, 100) }}</td>
                                    <td>{{ \Str::limit($post->child_age, 5) }}</td>
                                    <td>
                                         <div>
                                            <a href="{{ action('Admin\ProfileController@edit', ['id' => $post->id]) }}" role="button" class="btn btn-warning btn-sm">編集</a>
                                        </div>
                                         <div>
                                            <a href="{{ action('Admin\ProfileController@delete', ['id' => $post->id]) }}" role="button" class="btn btn-danger btn-sm">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection