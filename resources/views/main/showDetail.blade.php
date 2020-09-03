@extends('layouts.admin')
@section('title', '詳細画面')
@section('content')
    <div class="container">
         <div class="image1 col-md-6  mt-4">
             @if ($post->image_path)
            <img src="{{ asset('storage/image/' . $post->image_path) }}">
            @endif
         </div>
        <hr color="green">
        <div class="col-md-4">
        　　<a href="{{ action('PostsController@index') }}" role="button" class="btn btn-success btn-sm">ホーム画面に戻る</a>
        </div>
        <div class="infobox">
            <div class="contents mt-4">
            <div class="card mb-4">
                <div class="card-header">
                <p class="card-text">撮影日時
                {{ $post->day }}
                </p>
                <p class="card-text">タイトル
                {{ $post->title }}
                </p>
                </div>
                <div class="card-body">
                <p class="card-text">列車名
                {{ $post->train_id }}
                </p>
                <p class="card-text">内容
                {{ ($post->content) }}
                </p>
                </div>
                <div class="card-footer">
                     <span class="mr-2">
                     投稿日時 {{ $post->created_at->format('Y.m.d') }}
                     </span>
                     <span class="mr-2">
                     撮影場所 {{ $post->place }}
                    </span>
                </div>
             </div>
       <hr color="green">
       
       <h2>コメント</h2>
       
           <ul>
            @forelse ($post->comments as $comment)
              <li>
              {{ $comment->comment }}
              <div>
                 <a href="{{ action('CommentController@delete', [$post, $comment]) }}" id="form_{{ $comment->id }}" class="del">コメント削除</a>
              </div>
              </li>
            @empty
              <li>コメントはありません</li>
            @endforelse
           </ul>
           
       <form method="post" action="{{ action('CommentController@store', $post) }}">
            {{ csrf_field() }}
           <div class="form-group">
                   <input type="text" name="comment" placeholder="コメントを入力" value="{{ old('comment') }}" class="form-control">
                   @if ($errors->has('comment'))
                   <span class="error">{{ $errors->first('comment') }}</span>
                  @endif
          </div>
          <p><input type="submit" value="コメントする" class="btn btn-primary"></p>
       </form>
               
        </div>
        </div>
        </div>
    </div>
@endsection