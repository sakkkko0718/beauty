@extends('layouts.adminbase')

@section('content')
<div class="treatments">
    @foreach ($treatments as $treatment)
    <a href=""><div class="treatment">
        {{$treatment->menu}}
    </div></a>
    @endforeach
</div>
@endsection

<style>
    .treatments {
        margin: 0 auto;
        max-width: 90%;
    }
    .treatment {
        margin: 10px;
        padding: 15px;
        background-color: #D5EAD8;
    }
</style>