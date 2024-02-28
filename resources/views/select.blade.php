@extends('layouts.adminbase')

@section('content')
<div class="select">
    <a href="/categories"><div class="menu">お悩み別で探す</div></a>
    <a href="/treatments"><div class="menu">施術別で探す</div></a>
</div>
@endsection

<style>
    .select {
        margin: 0 auto;
        max-width: 50%;
    }
    .menu {
        margin: 10px;
        padding: 15px;
        text-align: center;
        background-color: #D3DEF1;
    }
</style>