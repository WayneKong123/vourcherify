<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{  
    public function dashboard()
    {
        // Logic to display the admin dashboard
        return view('admin.dashboard');
    }

    public function users()
    {
        // Logic to display the list of users
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function createUser()
    {
        // Logic to display the create user form
        return view('admin.create-user');
    }

    public function storeUser(Request $request)
    {
        // Validate and store the new user
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User created successfully.');
    }

    public function editUser($id)
    {
        // Retrieve the user and display the edit form
        $user = User::findOrFail($id);
        return view('admin.edit-user', ['user' => $user]);
    }

    public function updateUser(Request $request, $id)
    {
        // Validate and update the user
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6',
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->role = $validatedData['role'];
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully.');
    }

    public function deleteUser($id)
    {
        // Delete the user
        User::findOrFail($id)->delete();

        return redirect()->route('admin.users')->with('success', 'User deleted successfully.');
    }

    // Add more methods for other admin actions

}
