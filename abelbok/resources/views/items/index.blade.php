@extends('layouts.app')

@section('content')
    <h1 class="">Item</h1>

    @if (count($items) > 0)
        @foreach ($items as $item)
            <div class="well">
                <h3 class=""><a href="{{ url('/items/'.$item->id) }}">{{$item->title}}</a></h3>
                <small>Written on {{$item->created_at}}</small>
            </div>
        @endforeach
        {{$items->links()}}
    @else
        <p> No items found <p>
    @endif
@endsection