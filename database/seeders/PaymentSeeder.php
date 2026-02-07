<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Animal;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        $animals = Animal::all();

        foreach ($animals as $animal) {
            // Create payment for animals with QR codes (approved)
            if ($animal->qr_code) {
                Payment::create([
                    'user_id' => $animal->user_id,
                    'animal_id' => $animal->id,
                    'amount' => $animal->type === 'batch' ? 10000.00 : 5000.00,
                    'payment_method' => ['Orange Money', 'Wave', 'Free Money', 'Virement bancaire'][rand(0, 3)],
                    'transaction_reference' => 'TXN' . strtoupper(uniqid()),
                    'status' => 'approved',
                    'processed_at' => now()->subDays(rand(1, 30))
                ]);
            } else {
                // 50% chance of pending payment for animals without QR
                if (rand(0, 1)) {
                    Payment::create([
                        'user_id' => $animal->user_id,
                        'animal_id' => $animal->id,
                        'amount' => $animal->type === 'batch' ? 10000.00 : 5000.00,
                        'payment_method' => ['Orange Money', 'Wave', 'Free Money'][rand(0, 2)],
                        'transaction_reference' => 'TXN' . strtoupper(uniqid()),
                        'status' => 'pending'
                    ]);
                }
            }
        }
    }
}