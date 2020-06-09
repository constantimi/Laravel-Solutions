@extends('layouts.app')

@section('content')

    <div class="container panel-wrapper content-group">

        <div class="title m-b-md mt-3">
            Welcome to {{config('app.name', 'Laravel')}}!
        </div>
        <div class="title m-b-md my-3">
            @auth
                <a class="btn btn-dark" href="{{ url('/dashboard') }}">Go to Dashboard</a>
            @endauth
        </div>
        
    </div>

@endsection
