<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class CustomerController extends Controller
{
   

    
    public function showLoginForm()
    {
        return view('customers.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('customers.dashboard');
        } else {
            return redirect()->back()->withErrors(['Invalid credentials']);
        }
    }

    public function showSignupForm()
    {
        return view('customers.signup');
    }

    public function signup(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:customers',
        'phone_number' => 'required|min:10|max:11',
        'date_of_birth' => 'required',
        'password' => 'required|min:6|confirmed',
    ], [
        'phone_number.min' => 'Phone number should have at least 10 digits',
        'phone_number.max' => 'Phone number should have maximum 11 digits',
        'password.confirmed' => 'The password confirmation does not match.',
    ]);

    $validatedData['password'] = bcrypt($validatedData['password']);

    $customer = Customer::create($validatedData);

    Auth::guard('customer')->login($customer);

    return redirect()->route('customers.dashboard');
}


public function dashboard()
{
    $customer = Auth::user();

    return view('customers.dashboard', compact('customer'));
}


    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
        ]);

        $customer->update($validatedData);

        return redirect()->route('customers.dashboard')->with('success', 'Customer information updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        Auth::logout();

        return redirect()->route('customers.login')->with('success', 'Account deleted successfully.');
    }
}
