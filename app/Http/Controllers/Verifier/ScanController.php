<?php

namespace App\Http\Controllers\Verifier;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function index()
    {
        if (!session('user_logged_in') || session('user_role') !== 'verifier') {
            return redirect()->route('admin.login');
        }

        return view('verifier.scan');
    }

    public function verify(Request $request)
    {
        if (!session('user_logged_in') || session('user_role') !== 'verifier') {
            return redirect()->route('admin.login');
        }

        $request->validate([
            'qr_code' => 'required|string'
        ]);

        $animal = Animal::where('qr_code', $request->qr_code)->first();

        if (!$animal) {
            return back()->withErrors(['qr_code' => 'QR code invalide ou animal non trouvé']);
        }

        return redirect()->route('verifier.animal.show', $animal->qr_code);
    }

    public function show($qrCode)
    {
        if (!session('user_logged_in') || session('user_role') !== 'verifier') {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('qr_code', $qrCode)
            ->with('user', 'files')
            ->firstOrFail();

        return view('verifier.animal', compact('animal'));
    }

    public function publicVerify($qrCode)
    {
        $animal = Animal::where('qr_code', $qrCode)
            ->with('user', 'files')
            ->firstOrFail();

        return view('public.verify', compact('animal'));
    }
}