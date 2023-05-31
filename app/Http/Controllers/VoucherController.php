<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        // Retrieve all vouchers and display them
        $vouchers = Voucher::all();
        return view('vouchers.index', ['vouchers' => $vouchers]);
    }

    public function create()
    {
        // Logic to display the create voucher form
        return view('vouchers.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new voucher
        // Add authorization logic to allow only admin to create a voucher

        // Example validation, modify as per your requirements
        $validatedData = $request->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'max_redemptions' => 'required',
            'max_redemptions_per_user' => 'required',
            'expires_at' => 'required',
        ]);

        Voucher::create($validatedData);

        return redirect()->route('vouchers.index')->with('success', 'Voucher created successfully.');
    }

    public function edit($id)
    {
        // Retrieve the voucher and display the edit form
        $voucher = Voucher::findOrFail($id);
        return view('vouchers.edit', ['voucher' => $voucher]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the voucher
        // Add authorization logic to allow only admin to update a voucher

        // Example validation, modify as per your requirements
        $validatedData = $request->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required',
            'max_redemptions' => 'required',
            'max_redemptions_per_user' => 'required',
            'expires_at' => 'required',
        ]);

        $voucher = Voucher::findOrFail($id);
        $voucher->update($validatedData);

        return redirect()->route('vouchers.index')->with('success', 'Voucher updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the voucher
        // Add authorization logic to allow only admin to delete a voucher

        $voucher = Voucher::findOrFail($id);
        $voucher->delete();

        return redirect()->route('vouchers.index')->with('success', 'Voucher deleted successfully.');
    }

    // Add more methods for other voucher actions

}
