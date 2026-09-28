<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar user default dengan urutan role_id 1 s.d. 5
        $users = [
            [
                'role_id'  => 1, // Admin
                'name'     => 'Administrator',
                'email'    => 'admin@gmail.com',
            ],
            [
                'role_id'  => 2, // Bendahara
                'name'     => 'Bendahara',
                'email'    => 'bendahara@gmail.com',
            ],
            [
                'role_id'  => 3, // Sekretaris
                'name'     => 'Sekretaris',
                'email'    => 'sekretaris@gmail.com',
            ],
            [
                'role_id'  => 4, // Santri
                'name'     => 'Santri Test',
                'email'    => 'santri@gmail.com',
            ],
            [
                'role_id'  => 5, // Ustadz
                'name'     => 'Ustadz Test',
                'email'    => 'ustadz@gmail.com',
            ],
        ];

        // Mass insert / firstOrCreate untuk tiap akun dengan password default 1234567890
        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'role_id'  => $userData['role_id'],
                    'name'     => $userData['name'],
                    'password' => Hash::make('1234567890'),
                ]
            );
        }
    }
}
