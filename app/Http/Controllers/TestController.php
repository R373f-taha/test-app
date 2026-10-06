<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
        ]);

        return response()->json([
            'status'  => 'success',
            'message' => 'User created successfully via Postman!',
            'data'    => [
                'name'  => $validated['name'],
                'email' => $validated['email'],
                'role'  => 'Backend Developer',
            ],
        ], 201);
    }
}