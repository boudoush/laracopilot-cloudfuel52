<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Hardcoded credentials for testing
        $credentials = [
            'admin@saheltrace.com' => ['password' => 'admin123', 'role' => 'admin', 'name' => 'Admin'],
            'breeder@saheltrace.com' => ['password' => 'breeder123', 'role' => 'breeder', 'name' => 'Éleveur Test'],
            'verifier@saheltrace.com' => ['password' => 'verifier123', 'role' => 'verifier', 'name' => 'Vérificateur Test']
        ];

        $email = $request->email;
        $password = $request->password;

        if (isset($credentials[$email]) && $credentials[$email]['password'] === $password) {
            // Set session data
            session([
                'admin_logged_in' => true,
                'user_logged_in' => true,
                'admin_user' => $credentials[$email]['name'],
                'user_name' => $credentials[$email]['name'],
                'admin_email' => $email,
                'user_email' => $email,
                'user_role' => $credentials[$email]['role']
            ]);

            // Redirect based on role
            if ($credentials[$email]['role'] === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($credentials[$email]['role'] === 'breeder') {
                return redirect()->route('breeder.dashboard');
            } elseif ($credentials[$email]['role'] === 'verifier') {
                return redirect()->route('verifier.dashboard');
            }
        }

        return back()->withErrors(['email' => 'Identifiants incorrects'])->withInput();
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login');
    }
}