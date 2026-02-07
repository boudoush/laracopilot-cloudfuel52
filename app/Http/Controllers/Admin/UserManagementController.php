<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $users = User::withCount('animals')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',
            'role' => 'required|in:admin,breeder,verifier',
            'location' => 'nullable|string|max:255'
        ]);

        User::create($validated);

        return redirect()->route('admin.users.index')
            ->with('success', 'Utilisateur créé avec succès');
    }

    public function edit($id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required|string|max:20',
            'role' => 'required|in:admin,breeder,verifier',
            'location' => 'nullable|string|max:255',
            'active' => 'boolean'
        ]);

        $user->update($validated);

        return redirect()->route('admin.users.index')
            ->with('success', 'Utilisateur modifié avec succès');
    }

    public function destroy($id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('success', 'Utilisateur supprimé avec succès');
    }
}