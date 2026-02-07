<?php

namespace App\Http\Controllers\Breeder;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private function getBreeder()
    {
        if (!session('user_logged_in') || session('user_role') !== 'breeder') {
            return null;
        }
        return User::where('email', session('user_email'))->first();
    }

    public function index()
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $payments = Payment::where('user_id', $breeder->id)
            ->with('animal')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        return view('breeder.payments.index', compact('payments'));
    }

    public function create($animalId)
    {
        $breeder = $this->getBreeder();
        if (!$breeder) {
            return redirect()->route('admin.login');
        }

        $animal = Animal::where('user_id', $breeder->id)->findOrFail($animalId);

        // Check if animal already has a QR code
        if ($animal->qr_code) {
            return redirect()->route('breeder.animals.show', $animal->id)
                ->with('error', 'Cet animal possède déjà un QR code');
        }

        // Check if there's a pending payment
        $pendingPayment = Payment::where('animal_id', $animal->id)
            ->where('status', 'pending')
            ->first();

        if ($pendingPayment) {
            return redirect()->route('breeder.animals.show', $animal->id)
                ->with('error', 'Un paiement est déjà en attente pour cet animal');
        }

        // Calculate amount based on type
        $amount = $animal->type === 'batch' ? 10000 : 5000;

        // WhatsApp contact info
        $whatsappNumber = '221771234567';
        $whatsappMessage = urlencode(
            "Bonjour SahelTrace,\n\n" .
            "Je souhaite effectuer un paiement pour générer un QR code.\n\n" .
            "Détails:\n" .
            "- Animal: {$animal->identification}\n" .
            "- Type: " . ($animal->type === 'batch' ? 'Lot' : 'Individuel') . "\n" .
            "- Montant: {$amount} FCFA\n" .
            "- Éleveur: {$breeder->name}\n" .
            "- Email: {$breeder->email}\n\n" .
            "Merci!"
        );

        $whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$whatsappMessage}";

        return view('breeder.payments.create', compact('animal', 'amount', 'whatsappUrl'));
    }
}