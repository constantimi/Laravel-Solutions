@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height mt-5">

{{-- In navbar there is the same functionality --}}

{{--    @if (Route::has('login'))--}}
{{--        <div class="float-right links">--}}
{{--            @auth--}}
{{--                <a class="btn btn-dark" href="{{ url('/dashboard') }}">Go to Dashboard</a>--}}
{{--            @else--}}
{{--                <a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a class="btn btn-outline-dark" href="{{ route('register') }}">Register</a>--}}
{{--                @endif--}}
{{--            @endauth--}}
{{--        </div>--}}
{{--    @endif--}}

    <div class="content">
        <div class="title m-b-md">
            Welcome to Ablebok!
        </div>
        <div class="title m-b-md">
            @auth
                <a class="btn btn-dark" href="{{ url('/dashboard') }}">Go to Dashboard</a>
            @endauth
        </div>
    </div>
</div>
@endsection
