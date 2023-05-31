
@extends('layouts.app')

@section('title', 'Edit Voucher')

@section('content')
<h1>Edit Voucher {{ $voucher->voucher_code }}</h1>
<form method="POST" action="{{ route('vouchers.update', $voucher->id) }}">
    @csrf
    @method('PUT')
    <label for="voucher_code">Voucher Code:</label>
    <input type="text" name="voucher_code" id="voucher_code" value="{{ $voucher->voucher_code }}">
    <br>
    <label for="discount_amount">Discount Amount:</label>
    <input type="number" name="discount_amount" id="discount_amount" value="{{ $voucher->discount_amount }}">
    <br>
    <label for="expiration_date">Expiration Date:</label>
    <input type="date" name="expiration_date" id="expiration_date" value="{{ $voucher->expiration_date }}">
    <br>
    <label for="customer_id">Customer ID:</label>
    <input type="number" name="customer_id" id="customer_id" value="{{ $voucher->customer_id }}">
    <br>
    <button type="submit">Update Voucher</button>
        <!-- <label for="product_id">Product ID:</label>
        <input type="number" name="product_id" id="product_id" value="{{ $voucher->product_id }}"> -->
        <br>
        
    </form>
@endsection
