<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Admin Principal', 'email' => 'admin@saheltrace.com', 'phone' => '+221771234567', 'role' => 'admin', 'location' => 'Dakar'],
            ['name' => 'Amadou Diallo', 'email' => 'eleveur@saheltrace.com', 'phone' => '+221772345678', 'role' => 'breeder', 'location' => 'Thiès'],
            ['name' => 'Fatou Sow', 'email' => 'verificateur@saheltrace.com', 'phone' => '+221773456789', 'role' => 'verifier', 'location' => 'Saint-Louis'],
            ['name' => 'Mamadou Ba', 'email' => 'mamadou.ba@example.com', 'phone' => '+221774567890', 'role' => 'breeder', 'location' => 'Kaolack'],
            ['name' => 'Aïssatou Ndiaye', 'email' => 'aissatou.n@example.com', 'phone' => '+221775678901', 'role' => 'breeder', 'location' => 'Ziguinchor'],
            ['name' => 'Ousmane Sarr', 'email' => 'ousmane.s@example.com', 'phone' => '+221776789012', 'role' => 'verifier', 'location' => 'Louga'],
            ['name' => 'Khady Fall', 'email' => 'khady.f@example.com', 'phone' => '+221777890123', 'role' => 'breeder', 'location' => 'Diourbel'],
            ['name' => 'Ibrahima Touré', 'email' => 'ibrahima.t@example.com', 'phone' => '+221778901234', 'role' => 'breeder', 'location' => 'Matam'],
            ['name' => 'Mariama Cissé', 'email' => 'mariama.c@example.com', 'phone' => '+221779012345', 'role' => 'verifier', 'location' => 'Tambacounda'],
            ['name' => 'Cheikh Gueye', 'email' => 'cheikh.g@example.com', 'phone' => '+221770123456', 'role' => 'breeder', 'location' => 'Kolda']
        ];

        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}