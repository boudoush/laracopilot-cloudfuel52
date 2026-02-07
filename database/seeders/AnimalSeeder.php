<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;
use App\Models\User;

class AnimalSeeder extends Seeder
{
    public function run()
    {
        $breeders = User::where('role', 'breeder')->get();

        $animals = [
            ['identification' => 'BOV001', 'species' => 'Bovin', 'breed' => 'Zébu Gobra', 'sex' => 'male', 'age' => 3, 'weight' => 450.00],
            ['identification' => 'BOV002', 'species' => 'Bovin', 'breed' => 'N\'Dama', 'sex' => 'female', 'age' => 4, 'weight' => 380.00],
            ['identification' => 'OVI001', 'species' => 'Ovin', 'breed' => 'Mouton Peul', 'sex' => 'male', 'age' => 2, 'weight' => 45.00],
            ['identification' => 'OVI002', 'species' => 'Ovin', 'breed' => 'Mouton Touabire', 'sex' => 'female', 'age' => 1, 'weight' => 35.00],
            ['identification' => 'CAP001', 'species' => 'Caprin', 'breed' => 'Chèvre Sahélienne', 'sex' => 'female', 'age' => 2, 'weight' => 28.00],
            ['identification' => 'BOV003', 'species' => 'Bovin', 'breed' => 'Zébu Maure', 'sex' => 'male', 'age' => 5, 'weight' => 520.00],
            ['identification' => 'OVI003', 'species' => 'Ovin', 'breed' => 'Mouton Djallonké', 'sex' => 'male', 'age' => 1, 'weight' => 30.00],
            ['identification' => 'CAP002', 'species' => 'Caprin', 'breed' => 'Chèvre Naine', 'sex' => 'male', 'age' => 3, 'weight' => 32.00],
            ['identification' => 'BOV004', 'species' => 'Bovin', 'breed' => 'Zébu Azawak', 'sex' => 'female', 'age' => 4, 'weight' => 410.00],
            ['identification' => 'OVI004', 'species' => 'Ovin', 'breed' => 'Mouton Bali-Bali', 'sex' => 'female', 'age' => 2, 'weight' => 40.00],
            ['identification' => 'LOT001', 'type' => 'batch', 'species' => 'Ovin', 'breed' => 'Mouton Peul', 'sex' => 'male', 'age' => 1, 'weight' => 400.00, 'batch_size' => 10],
            ['identification' => 'LOT002', 'type' => 'batch', 'species' => 'Caprin', 'breed' => 'Chèvre Sahélienne', 'sex' => 'female', 'age' => 2, 'weight' => 350.00, 'batch_size' => 15],
            ['identification' => 'BOV005', 'species' => 'Bovin', 'breed' => 'N\'Dama', 'sex' => 'male', 'age' => 6, 'weight' => 480.00],
            ['identification' => 'CAP003', 'species' => 'Caprin', 'breed' => 'Chèvre du Sahel', 'sex' => 'female', 'age' => 1, 'weight' => 25.00],
            ['identification' => 'OVI005', 'species' => 'Ovin', 'breed' => 'Mouton Touabire', 'sex' => 'male', 'age' => 3, 'weight' => 50.00]
        ];

        foreach ($animals as $index => $animalData) {
            $breeder = $breeders[$index % $breeders->count()];
            
            $animalData['user_id'] = $breeder->id;
            $animalData['health_book'] = 'Carnet de santé à jour. Dernière visite vétérinaire: ' . now()->subDays(rand(10, 90))->format('d/m/Y');
            $animalData['treatments'] = 'Déparasitage interne et externe effectué';
            $animalData['vaccinations'] = 'Vaccination contre la fièvre aphteuse, peste bovine';
            
            // 60% of animals have QR codes (payment approved)
            if (rand(1, 10) <= 6) {
                $animalData['qr_code'] = 'ST-' . strtoupper(uniqid());
            }

            Animal::create($animalData);
        }
    }
}