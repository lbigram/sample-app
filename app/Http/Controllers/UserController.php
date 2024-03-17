<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Display all users
    public function index()
    {
        $users = DB::select('SELECT * FROM users');
        return response()->json($users);
    }

    // Store a new user
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        DB::insert('INSERT INTO users (name, email) VALUES (?, ?)', [$name, $email]);

        return response()->json(['message' => 'User created successfully'], 201);
    }

    // Show a specific user
    public function show($id)
    {
        $user = DB::select('SELECT * FROM users WHERE id = ?', [$id]);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    // Update an existing user
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');

        $affected = DB::update('UPDATE users SET name = ?, email = ? WHERE id = ?', [$name, $email, $id]);

        if ($affected) {
            return response()->json(['message' => 'User updated successfully']);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    // Delete a user
    public function destroy($id)
    {
        $deleted = DB::delete('DELETE FROM users WHERE id = ?', [$id]);

        if ($deleted) {
            return response()->json(['message' => 'User deleted successfully']);
        }

        return response()->json(['message' => 'User not found'], 404);
    }
}
