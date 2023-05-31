@extends('layouts.app')

@section('title', 'View Voucher')

@section('content')
    <h1>Voucher {{ $voucher->voucher_code }}</h1>

    <ul>
        <li>ID: {{ $voucher->id }}</li>
        <li>Code: {{ $voucher->voucher_code }}</li>
        <li>Expiration Date: {{ $voucher->expiration_date }}</li>
        <li>Discount Amount: {{ $voucher->discount_amount }}</li>
    </ul>

    <a href="{{ route('vouchers.edit', ['id' => $voucher->id]) }}">Edit</a>


    <form method="POST" action="{{ route('vouchers.destroy', $voucher->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Voucher</button>
    </form>

@endsection
