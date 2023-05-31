@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h5>Welcome, {{ auth()->user()->name }}!</h5>
                        <p>Email: {{ auth()->user()->email }}</p>
                        <p>User Type: {{ auth()->user()->type }}</p>
                        <p>Status: {{ auth()->user()->status }}</p>
                        <p>Last Active At: {{ auth()->user()->active_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
