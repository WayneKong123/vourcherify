@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Customer Details') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}:</label>
                            <input type="text" class="form-control" id="name" value="{{ $customer->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}:</label>
                            <input type="email" class="form-control" id="email" value="{{ $customer->email }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">{{ __('Phone Number') }}:</label>
                            <input type="text" class="form-control" id="phone_number" value="{{ $customer->phone_number }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="date_of_birth">{{ __('Date of Birth') }}:</label>
                            <input type="text" class="form-control" id="date_of_birth" value="{{ $customer->date_of_birth }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
