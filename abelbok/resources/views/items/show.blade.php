@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a class="btn btn-outline-dark btn-sm my-3" href="{{ url('/items')}}" class="btn btn-link">Go Back</a>
        
        <h1 class="">{{$item->title}}</h1>

        <img width="100px" height="100px" src="{{ url('storage/storage/'.$item->cover_image)}}" />

        <div class="container mt-2">
            {!! $item->description !!}
        </div>
        <hr>
        <small>Written on {{$item->created_at}} by {{$item->user->name}}</small>
        <hr>
        @if (!Auth::guest())
            @if (Auth::user()->id == $item->user_id)                
                        
                <a class="btn btn-outline-dark float-left btn-sm" href="{{ url('items/'.$item->id.'/edit')}}">Edit</a>

                {!!Form::open(['action' => ['ItemsController@destroy', $item->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}
                {!!Form::close()!!}
                
            @endif
        @endif
    </div>
@endsection