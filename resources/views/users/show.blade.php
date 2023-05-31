@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Details') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control" value="{{ $user->email }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="type">{{ __('User Type') }}</label>
                            <input id="type" type="text" class="form-control" value="{{ $user->type }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="status">{{ __('Status') }}</label>
                            <input id="status" type="text" class="form-control" value="{{ $user->status }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="active_at">{{ __('Active At') }}</label>
                            <input id="active_at" type="text" class="form-control" value="{{ $user->active_at }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
