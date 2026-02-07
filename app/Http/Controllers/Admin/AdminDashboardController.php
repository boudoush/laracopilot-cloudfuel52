<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Animal;
use App\Models\Payment;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $totalUsers = User::count();
        $totalBreeders = User::where('role', 'breeder')->count();
        $totalVerifiers = User::where('role', 'verifier')->count();
        $totalAnimals = Animal::count();
        $animalsWithQR = Animal::whereNotNull('qr_code')->count();
        $totalPayments = Payment::count();
        $pendingPayments = Payment::where('status', 'pending')->count();
        $approvedPayments = Payment::where('status', 'approved')->count();
        $totalRevenue = Payment::where('status', 'approved')->sum('amount');

        $recentAnimals = Animal::with('user')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        $recentPayments = Payment::with('user', 'animal')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalUsers', 'totalBreeders', 'totalVerifiers', 'totalAnimals',
            'animalsWithQR', 'totalPayments', 'pendingPayments', 'approvedPayments',
            'totalRevenue', 'recentAnimals', 'recentPayments'
        ));
    }
}