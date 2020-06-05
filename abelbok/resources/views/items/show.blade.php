@extends('layouts.app')

@section('content')
    
    <a href="{{ url('/items')}}" class="btn btn-link">Go Back</a>
    
    <h1 class="">{{$item->title}}</h1>
    
    <div class="container">
        {!! $item->description !!}
    </div>
    <hr>
    <small>Written on {{$item->created_at}}</small>
    <hr>
    <a href="{{ url('items/'.$item->id.'/edit')}}" class="btn btn-default float-left">Edit</a>

    {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection