<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Animal;
use Illuminate\Http\Request;

class PaymentManagementController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $payments = Payment::with('user', 'animal')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.payments.index', compact('payments'));
    }

    public function show($id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $payment = Payment::with('user', 'animal')
            ->findOrFail($id);

        return view('admin.payments.show', compact('payment'));
    }

    public function approve(Request $request, $id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $payment = Payment::findOrFail($id);
        $payment->update([
            'status' => 'approved',
            'processed_at' => now()
        ]);

        // Generate QR code for the animal
        $animal = $payment->animal;
        if (!$animal->qr_code) {
            $animal->update([
                'qr_code' => 'ST-' . strtoupper(uniqid())
            ]);
        }

        return redirect()->route('admin.payments.index')
            ->with('success', 'Paiement approuvé et QR code généré');
    }

    public function reject(Request $request, $id)
    {
        if (!session('user_logged_in') || session('user_role') !== 'admin') {
            return redirect()->route('admin.login');
        }

        $payment = Payment::findOrFail($id);
        $payment->update([
            'status' => 'rejected',
            'processed_at' => now()
        ]);

        return redirect()->route('admin.payments.index')
            ->with('success', 'Paiement rejeté');
    }
}