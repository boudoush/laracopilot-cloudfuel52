<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Animal;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        // User Statistics
        $totalUsers = User::count();
        $breederCount = User::where('role', 'breeder')->count();
        $verifierCount = User::where('role', 'verifier')->count();
        $adminCount = User::where('role', 'admin')->count();
        $newUsersThisMonth = User::whereMonth('created_at', date('m'))->count();
        $newUsersToday = User::whereDate('created_at', today())->count();

        // Animal Statistics
        $totalAnimals = Animal::count();
        $approvedAnimals = Animal::where('status', 'approved')->count();
        $pendingAnimals = Animal::where('status', 'pending')->count();
        $rejectedAnimals = Animal::where('status', 'rejected')->count();
        $animalsWithQR = Animal::whereNotNull('qr_code')->count();
        $animalsThisMonth = Animal::whereMonth('created_at', date('m'))->count();
        $animalsToday = Animal::whereDate('created_at', today())->count();

        // Animals by Species
        $animalsBySpecies = Animal::select('species', DB::raw('count(*) as total'))
            ->groupBy('species')
            ->get();

        // Payment Statistics
        $totalPayments = Payment::sum('amount');
        $approvedPayments = Payment::where('status', 'approved')->sum('amount');
        $pendingPayments = Payment::where('status', 'pending')->sum('amount');
        $paymentsThisMonth = Payment::whereMonth('created_at', date('m'))->sum('amount');
        $paymentsToday = Payment::whereDate('created_at', today())->sum('amount');
        $totalTransactions = Payment::count();

        // Recent Activities
        $recentUsers = User::orderBy('created_at', 'desc')->take(5)->get();
        $recentAnimals = Animal::with('user')->orderBy('created_at', 'desc')->take(5)->get();
        $recentPayments = Payment::with('user')->orderBy('created_at', 'desc')->take(5)->get();

        // Monthly Growth Data (Last 6 months)
        $monthlyUserGrowth = [];
        $monthlyAnimalGrowth = [];
        $monthlyRevenueGrowth = [];
        
        for ($i = 5; $i >= 0; $i--) {
            $month = now()->subMonths($i);
            $monthName = $month->format('M');
            
            $monthlyUserGrowth[] = [
                'month' => $monthName,
                'count' => User::whereYear('created_at', $month->year)
                    ->whereMonth('created_at', $month->month)
                    ->count()
            ];
            
            $monthlyAnimalGrowth[] = [
                'month' => $monthName,
                'count' => Animal::whereYear('created_at', $month->year)
                    ->whereMonth('created_at', $month->month)
                    ->count()
            ];
            
            $monthlyRevenueGrowth[] = [
                'month' => $monthName,
                'amount' => Payment::where('status', 'approved')
                    ->whereYear('created_at', $month->year)
                    ->whereMonth('created_at', $month->month)
                    ->sum('amount')
            ];
        }

        // Conversion Rates
        $qrCodeGenerationRate = $totalAnimals > 0 ? round(($animalsWithQR / $totalAnimals) * 100, 1) : 0;
        $approvalRate = $totalAnimals > 0 ? round(($approvedAnimals / $totalAnimals) * 100, 1) : 0;
        $paymentApprovalRate = $totalTransactions > 0 ? round((Payment::where('status', 'approved')->count() / $totalTransactions) * 100, 1) : 0;

        return view('admin.dashboard', compact(
            'totalUsers', 'breederCount', 'verifierCount', 'adminCount',
            'newUsersThisMonth', 'newUsersToday',
            'totalAnimals', 'approvedAnimals', 'pendingAnimals', 'rejectedAnimals',
            'animalsWithQR', 'animalsThisMonth', 'animalsToday',
            'animalsBySpecies',
            'totalPayments', 'approvedPayments', 'pendingPayments',
            'paymentsThisMonth', 'paymentsToday', 'totalTransactions',
            'recentUsers', 'recentAnimals', 'recentPayments',
            'monthlyUserGrowth', 'monthlyAnimalGrowth', 'monthlyRevenueGrowth',
            'qrCodeGenerationRate', 'approvalRate', 'paymentApprovalRate'
        ));
    }
}