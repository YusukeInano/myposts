<div class="container mt-4">
        <div class="border p-4">
            <h1 class="h7 mb-4">
                コメントの登録
            </h1>

            <form action="{{ action('CommentController@store') }}" method="post" enctype="multipart/form-data">
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
                       <label>コメントする人</label>
                       <input type="text" name="commenter" value="{{ old('commenter') }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="comment">コメント</label>
                        <input
                            id="comment"
                            name="comment"
                            class="form-control"
                            value="{{ old('comment') }}"
                            type="text"
                            placeholder="コメント入力"
                        >
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