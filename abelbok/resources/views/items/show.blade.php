@extends('layouts.app')

@section('content')
    <a href="{{ url('/items')}}" class="btn btn-primary">Go Back</a>
    
    <h1 class="">{{$item->title}}</h1>
    
    <div class="container">
        {!! $item->description !!}
    </div>

    <hr>

    <small>Written on {{$item->created_at}}</small>
@endsection