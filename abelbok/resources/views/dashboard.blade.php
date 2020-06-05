@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>Dashboard</h1>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                
                    <a href="{{ url('/items/create') }}" class="btn btn-outline-success float-right">Create new item</a>
                                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
