@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h5>Name: {{ $customer->name }}</h5>
                        <p>Email: {{ $customer->email }}</p>
                        <p>Phone Number: {{ $customer->phone_number }}</p>
                        <p>Date of Birth: {{ $customer->date_of_birth }}</p>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">{{ __('Edit Profile') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
