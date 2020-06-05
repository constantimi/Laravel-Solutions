@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="mt-3">Items</h1>

        @if (count($items) > 0)
            @foreach ($items as $item)
                <div class="card card-body bg-white my-3">
                    <h3><a href="{{ url('/items/'.$item->id) }}">{{$item->title}}</a></h3>
                    <small>Written on {{$item->created_at}}</small>
                </div>
            @endforeach
            {{$items->links()}}
        @else
            <p> No items found <p>
        @endif
    </div>
@endsection