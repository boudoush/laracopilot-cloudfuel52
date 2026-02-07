<?php

namespace App\Http\Controllers\Breeder;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Payment;
use App\Models\User;

class BreederDashboardController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'breeder') {
            return redirect()->route('admin.login');
        }

        // Get breeder's user ID (in real app, from authenticated user)
        $breederEmail = session('user_email');
        $breeder = User::where('email', $breederEmail)->first();

        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $totalAnimals = Animal::where('user_id', $breeder->id)->count();
        $animalsWithQR = Animal::where('user_id', $breeder->id)
            ->whereNotNull('qr_code')
            ->count();
        $animalsWithoutQR = $totalAnimals - $animalsWithQR;
        $totalPayments = Payment::where('user_id', $breeder->id)->count();
        $pendingPayments = Payment::where('user_id', $breeder->id)
            ->where('status', 'pending')
            ->count();
        $approvedPayments = Payment::where('user_id', $breeder->id)
            ->where('status', 'approved')
            ->count();

        $recentAnimals = Animal::where('user_id', $breeder->id)
            ->withCount('files')
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('breeder.dashboard', compact(
            'totalAnimals', 'animalsWithQR', 'animalsWithoutQR',
            'totalPayments', 'pendingPayments', 'approvedPayments',
            'recentAnimals'
        ));
    }
}