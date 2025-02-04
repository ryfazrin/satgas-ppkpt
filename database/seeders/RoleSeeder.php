<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role')->insert([
            [
                'role_name' => 'Sekretaris Satgas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Ketua Satgas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'role_name' => 'Pelapor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
