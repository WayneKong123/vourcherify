@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Details') }}</div>

                    <div class="card-body">
                        <h5>Name: {{ $user->name }}</h5>
                        <p>Email: {{ $user->email }}</p>
                        <p>User Type: {{ $user->type }}</p>
                        <p>Status: {{ $user->status }}</p>
                        <p>Last Active At: {{ $user->active_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
