@extends('layouts.admin')
@section('title', 'コメント一覧')
@section('content')
 <div class="container">
        <hr color="green">
        <div class="infobox">
            <div class="contents mt-4">
                @foreach($comments as $comment)
                   <div class="card mb-4">
                       <div class="card-header">
                       <p class="card-text">コメンター
                       {{ $comments->commenter }}
                       </p>
                       </div>
                       <div class="card-body">
                       <p class="card-text">コメント
                       {{ $comments->comment }}
                       </p>
                      </div>
                   </div>
                @endforeach
        <hr color="green">
            </div>
        </div>
</div>
@endsection