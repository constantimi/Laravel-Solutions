@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
    <div class="wrapper">
        <div class="container">
            <h1>{{$title}}</h1>
        </div>
    </div>
@endsection
