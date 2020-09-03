@extends('layouts.front')
@section('title', 'ホーム画面')
@section('content')
    <div class="container">
        <hr color="green">
        <div class="infobox">
        <div class="contents mt-4">
                @foreach($posts as $post)
                     <div class="card mb-4">
                             <div class="card-header">
                             {{ str_limit($post->title, 20) }}
                             </div>
                             <div class="card-body">
                               <p class="card-text">
                               {{ str_limit($post->content, 200) }}
                               </p>
                               <div class="col-md-4">
                               <a href="{{ action('PostsController@showDetail', $post) }}" role="button" class="btn btn-primary btn-sm">続きを読む</a>
                               </div>
                               <div class="image1 col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                               </div>
                             </div>
                             <div class="card-footer">
                               <span class="mr-2">
                               投稿日時 {{ $post->created_at->format('Y.m.d') }}
                               </span>
                               <span class="mr-2">
                               撮影場所 {{ $post->place }}
                               </span>
                                @if ($post->comments->count())
                               <span class="mr-2">
                                <a href="{{ action('PostsController@showDetail', $post) }}" role="button" class="btn btn-success btn-sm">コメント {{ $post->comments->count() }}件</a>
                               </span>
                                @endif
                                <form action="{{ action('AddressController@write2') }}" method="post" enctype="multipart/form-data">
                                     @csrf
                                   <input type="hidden" id="search_results"　name="textbox2" value="{{ $post->place }}">
                                   <input type="submit" value="撮影地検索" class="btn btn-outline-primary btn-sm">
                                </form>
                             </div>
                        </div>
                @endforeach
        </div>
        </div>
    </div>
@endsection