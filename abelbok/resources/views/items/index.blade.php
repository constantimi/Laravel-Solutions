@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="mt-3">Items</h1>

        @if (count($items) > 0)
            @foreach ($items as $item)
                <div class="card card-body bg-white my-3">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">    
                            <img width="100px" height="100px" src="{{ url('storage/storage/'.$item->cover_image)}}" />
                        </div>

                        <div class="col-md-8 col-sm-8">
                            <h3><a href="{{ url('/items/'.$item->id) }}">{{$item->title}}</a></h3>
                            <small>Written on {{$item->created_at}} by {{$item->user->name}}</small>                    
                        </div>
                    </div>
                </div>
            @endforeach
            {{$items->links()}}
        @else
            <p> No items found <p>
        @endif
    </div>
@endsection