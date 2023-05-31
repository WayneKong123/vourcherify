@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Customer Information') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('customers.update', $customer->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ $customer->name }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $customer->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">{{ __('Phone Number') }}</label>
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $customer->phone_number }}" required>
                            </div>

                            <div class="form-group">
                                <label for="date_of_birth">{{ __('Date of Birth') }}</label>
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ $customer->date_of_birth }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
