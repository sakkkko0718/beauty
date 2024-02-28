@extends('layouts.adminbase')

@section('content')
<div class="posts">
    <div class="post">
        @foreach($posts as $post)
        {{-- ユーザーの情報 --}}
        <div class="users"><div>ユーザー名：</div><div>年齢：</div><div>肌質：</div><div>お悩み：</div></div>
        {{-- ユーザーが受けた施術の内容 --}}
        <div class="treatments"><div>施術名：</div><div>施術回数：{{$post->count}}回</div>
        <div>レビュー評価：@for($i=0; $i<$post->review; $i++)<span>★</span>@endfor</div></div>
        {{-- コメントの内容 --}}
        <div class="comment">
            {{$post->comment}}
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .posts {
        margin: 0 auto;
        max-width: 90%;
    }
    .post {
        margin: 10px;
        padding: 15px;
    }
    .users , .treatments {
        font-size: 15px;
        display: flex;
    }
    .users div , .treatments div {
        margin-right: 15px;
    }
    
</style>