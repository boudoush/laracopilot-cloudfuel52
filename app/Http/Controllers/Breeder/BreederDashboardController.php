<?php

namespace App\Http\Controllers\Breeder;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Payment;
use App\Models\AnimalFile;
use Illuminate\Support\Facades\DB;

class BreederDashboardController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in')) {
            return redirect()->route('admin.login');
        }

        // Mock user ID (in real app, get from session)
        $userId = 1;

        // Animal Statistics
        $totalAnimals = Animal::where('user_id', $userId)->count();
        $approvedAnimals = Animal::where('user_id', $userId)->where('status', 'approved')->count();
        $pendingAnimals = Animal::where('user_id', $userId)->where('status', 'pending')->count();
        $withQRCode = Animal::where('user_id', $userId)->whereNotNull('qr_code')->count();

        // Animals by Species
        $animalsBySpecies = Animal::where('user_id', $userId)
            ->select('species', DB::raw('count(*) as total'))
            ->groupBy('species')
            ->get();

        // Recent Animals
        $recentAnimals = Animal::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        // Payment Statistics
        $totalPaid = Payment::where('user_id', $userId)->where('status', 'approved')->sum('amount');
        $pendingPayments = Payment::where('user_id', $userId)->where('status', 'pending')->sum('amount');

        // Files Statistics
        $totalFiles = AnimalFile::whereHas('animal', function($q) use ($userId) {
            $q->where('user_id', $userId);
        })->count();

        // Growth data (last 6 months)
        $monthlyGrowth = [];
        for ($i = 5; $i >= 0; $i--) {
            $month = now()->subMonths($i);
            $monthlyGrowth[] = [
                'month' => $month->format('M'),
                'count' => Animal::where('user_id', $userId)
                    ->whereYear('created_at', $month->year)
                    ->whereMonth('created_at', $month->month)
                    ->count()
            ];
        }

        // Quick Stats
        $avgWeight = Animal::where('user_id', $userId)->avg('weight');
        $avgAge = Animal::where('user_id', $userId)->avg('age');
        $healthyAnimals = Animal::where('user_id', $userId)
            ->whereNull('health_notes')
            ->orWhere('health_notes', '')
            ->count();

        return view('breeder.dashboard', compact(
            'totalAnimals', 'approvedAnimals', 'pendingAnimals', 'withQRCode',
            'animalsBySpecies', 'recentAnimals',
            'totalPaid', 'pendingPayments', 'totalFiles',
            'monthlyGrowth', 'avgWeight', 'avgAge', 'healthyAnimals'
        ));
    }
}