<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;

class AnimalManagementController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $animals = Animal::with('user')
            ->withCount('files')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.animals.index', compact('animals'));
    }

    public function show($id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $animal = Animal::with('user', 'files', 'payments')
            ->findOrFail($id);

        return view('admin.animals.show', compact('animal'));
    }

    public function destroy($id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('admin.animals.index')
            ->with('success', 'Animal supprimé avec succès');
    }
}