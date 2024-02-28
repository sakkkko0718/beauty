@extends('layouts.adminbase')

@section('content')
<div class="categories">
    @foreach ($categories as $category)
    <a href=""><div class="category">
        {{$category->category}}
    </div></a>
    @endforeach
</div>
@endsection

<style>
    .categories {
        margin: 0 auto;
        max-width: 90%;
    }
    .category {
        margin: 10px;
        padding: 15px;
        background-color: #FFF6E9;
    }
</style>