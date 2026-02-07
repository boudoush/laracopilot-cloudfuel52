<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        if (session('user_logged_in')) {
            $role = session('user_role');
            if ($role === 'admin') return redirect()->route('admin.dashboard');
            if ($role === 'breeder') return redirect()->route('breeder.dashboard');
            if ($role === 'verifier') return redirect()->route('verifier.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Test credentials (for demo)
        $testCredentials = [
            'admin@saheltrace.com' => ['password' => 'admin123', 'role' => 'admin', 'name' => 'Admin Principal'],
            'eleveur@saheltrace.com' => ['password' => 'eleveur123', 'role' => 'breeder', 'name' => 'Amadou Diallo'],
            'verificateur@saheltrace.com' => ['password' => 'verif123', 'role' => 'verifier', 'name' => 'Fatou Sow']
        ];

        // Check test credentials first
        if (isset($testCredentials[$request->email]) && 
            $testCredentials[$request->email]['password'] === $request->password) {
            
            $userData = $testCredentials[$request->email];
            session([
                'user_logged_in' => true,
                'user_email' => $request->email,
                'user_name' => $userData['name'],
                'user_role' => $userData['role']
            ]);

            if ($userData['role'] === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($userData['role'] === 'breeder') {
                return redirect()->route('breeder.dashboard');
            } elseif ($userData['role'] === 'verifier') {
                return redirect()->route('verifier.dashboard');
            }
        }

        // Check registered users (email only, no password for now)
        $user = User::where('email', $request->email)->first();
        if ($user) {
            session([
                'user_logged_in' => true,
                'user_email' => $user->email,
                'user_name' => $user->name,
                'user_role' => $user->role
            ]);

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'breeder') {
                return redirect()->route('breeder.dashboard');
            } elseif ($user->role === 'verifier') {
                return redirect()->route('verifier.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Identifiants invalides'])->withInput();
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login');
    }
}