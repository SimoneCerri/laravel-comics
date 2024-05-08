@extends('layouts.app')

@section('page-title')
Comics Details
@endsection

@section('page-main')
<div class="container">
    <img src="{{$comic['thumb']}}" alt="">
    <h2>
        {{$comic['title']}}
    </h2>
</div>
@endsection