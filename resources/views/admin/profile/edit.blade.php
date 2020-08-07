@extends('layouts.admin')
@section('title', '投稿者情報編集')
@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h7 mb-4">
                投稿者情報編集
            </h1>

            <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
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
                       <label>名前</label>
                       <input type="text" name="name" class="form-control" value="{{ $profiles_form->name }}">
                    </div>
                    <div class="form-group">
                        <label for="gender">性別</label>
                        <div class="form-check" id="gender" name="gender">
                          <input class="form-check-input" type="radio" name="gender" id="male" value="男性" checked>
                          <label class="form-check-label" for="male">男性</label>
                        </div>
                        <div class="form-check" id="gender" name="gender">
                          <input class="form-check-input" type="radio" name="gender" id="female" value="女性">
                          <label class="form-check-label" for="female">女性</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">住所　※郵便番号入力のみ</label>
                        <div class="form-row align-items-center">
                        <div class="col-auto">
                        <label class="sr-only" for="address1"></label>
                        <input type="text" class="form-control mb-2" id="address1" value="{{ $profiles_form->zip21 }}" name="zip21" maxlength='3'>
                        </div>
                        <div class="col-auto">
                        <label class="sr-only" for="address2"></label>
                        <input type="text" class="form-control mb-2" name="zip22" id="address2" value="{{ $profiles_form->zip22 }}" maxlength='4' onKeyUp="AjaxZip3.zip2addr('zip21','zip22','addr21','addr21');">
                        </div>
                        </div>
                        <input type="text" name="addr21" class="form-control" id="address" value="{{ $profiles_form->addr21 }}">
                    </div>
                    <div class="form-group">
                        
                    </div>
                    <div class="form-group">
                        <label for="intrduction">自己紹介</label>
                        <textarea name="introduction" rows="6" class="form-control" id="introduction">{{ $profiles_form->introduction }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="child_age">子供の年齢</label>
                            <select id="child_age" class="form-control" name="child_age" value="child_age">{{ $profiles_form->child_age }}
                                <option>0歳</option>
                                <option>1歳</option>
                                <option>2歳</option>
                                <option>3歳</option>
                                <option>4歳</option>
                                <option>5歳</option>
                                <option>6歳</option>
                                <option>7歳</option>
                                <option>8歳</option>
                                <option>9歳</option>
                                <option>10歳</option>
                                <option>11歳</option>
                                <option>12歳</option>
                                <option>13歳以上</option>
                            </select>
                    </div>
                     <div class="form-group">
                            <input type="hidden" name="id" value="{{ $profiles_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-warning btn-block btn-lg" value="更新">
                        </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection