@extends('layouts.app')

@section('title', 'Vouchers')

@section('content')
    <h1>Vouchers</h1>

    <p><a href="{{ route('vouchers.create') }}">Create New Voucher</a></p>

    @if ($vouchers->isEmpty())
        <p>No vouchers found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Expiration Date</th>
                    <th>Discount Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vouchers as $voucher)
                    <tr>
                        <td>{{ $voucher->id }}</td>
                        <td>{{ $voucher->voucher_code }}</td>
                        <td>{{ $voucher->expiration_date }}</td>
                        <td>{{ $voucher->discount_amount }}</td>
                        <td>
                            <a href="{{ route('vouchers.show', $voucher->id) }}">View</a>
                            <a href="{{ route('vouchers.edit', ['id' => $voucher->id]) }}">Edit</a>

                            <form method="POST" action="{{ route('vouchers.destroy', $voucher->id) }}">
    @csrf
    @method('DELETE') <!-- Add this line to spoof the DELETE method -->
    <button type="submit" onclick="return confirm('Are you sure you want to delete this voucher?')">Delete</button>
</form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
