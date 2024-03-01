@extends('layouts.adminbase')

@section('content')
<div class="posts">
    <div class="post">
        @foreach($posts as $post)
        <div class="detail">
        {{-- ユーザーの情報 --}}
        <div class="users">
            <div>ユーザー名：{{$post->user->name}}</div>
            <div>年齢：{{\Carbon\Carbon::parse($post->user->birth)->age}}歳</div> 
            <div>肌質：{{$post->user->skinType}}</div>
            <div>お悩み：{{$post->user->problem}}</div>
        </div>
        {{-- ユーザーが受けた施術の内容 --}}
        <div class="treatments">
            @foreach($post->treatments as $treatment)
            <div>施術名：{{$treatment->menu}}</div>
            <div>施術回数：{{$treatment->pivot->count}}回</div>
            <div>レビュー評価：@for($i=0; $i<$treatment->pivot->review; $i++)<span>★</span>@endfor</div>
        </div>
        {{-- コメントの内容 --}}
        <div class="comment">
            {{$treatment->pivot->comment}}
        </div>
        @endforeach
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
        padding: 10px;
        border-bottom: dotted #9FA0A0;
    }
    .users div , .treatments div {
        margin-right: 15px;
    }
    .comment{
        padding: 10px;
        border-bottom: dotted #9FA0A0;
    }
    .detail {
        margin: 20px;
        padding: 20px;
        border: solid black 1px;
    }
</style>