@extends('layouts.app')

@section('title', 'Create Voucher')

@section('content')
    <h1>Create Voucher</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vouchers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="voucher_code">Voucher Code:</label>
            <input type="text" name="voucher_code" id="voucher_code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="discount_amount">Discount Amount:</label>
            <input type="number" name="discount_amount" id="discount_amount" class="form-control" min="0" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="expiration_date">Expiration Date:</label>
            <input type="date" name="expiration_date" id="expiration_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="customer_id">Customer ID:</label>
            <input type="number" name="customer_id" id="customer_id" class="form-control" required>
        </div>
        <!-- <div class="form-group">
            <label for="product_id">Product ID:</label>
            <input type="number" name="product_id" id="product_id" class="form-control" required>
        </div> -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Voucher</button>
        </div>
    </form>
@endsection
