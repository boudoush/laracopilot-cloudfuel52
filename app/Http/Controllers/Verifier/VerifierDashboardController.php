<?php

namespace App\Http\Controllers\Verifier;

use App\Http\Controllers\Controller;

class VerifierDashboardController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'verifier') {
            return redirect()->route('admin.login');
        }

        return view('verifier.dashboard');
    }
}