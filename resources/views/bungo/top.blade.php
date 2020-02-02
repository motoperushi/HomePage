@extends('bungo.common.base')

@section('head')
    <link href="{{ asset('css/top.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="top-outer">
        <div class="main-vis">
        </div>
        @include('bungo.common.navi')
    </div>
@endsection