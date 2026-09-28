<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Pengelola penuh sistem'
            ],
            [
                'name' => 'bendahara',
                'display_name' => 'Bendahara',
                'description' => 'Pengelola keuangan & pembayaran SPP'
            ],
            [
                'name' => 'sekretaris',
                'display_name' => 'Sekretaris',
                'description' => 'Pengelola administrasi & perizinan'
            ],
            [
                'name' => 'santri',
                'display_name' => 'Santri / Wali Santri',
                'description' => 'Pengguna santri atau wali santri'
            ],
            [
                'name' => 'ustadz',
                'display_name' => 'Ustadz / Pengajar',
                'description' => 'Pengajar & pembimbing hafalan santri'
            ],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['name' => $role['name']],
                [
                    'display_name' => $role['display_name'],
                    'description' => $role['description'],
                ]
            );
        }
    }
}
