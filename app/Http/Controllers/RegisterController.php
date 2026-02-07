<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'location' => 'nullable|string|max:255'
        ]);

        // Create new breeder user
        $validated['role'] = 'breeder';
        $validated['active'] = true;

        User::create($validated);

        return redirect()->route('admin.login')
            ->with('success', 'Inscription réussie! Vous pouvez maintenant vous connecter avec votre email.');
    }
}