<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CafeTableSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            DB::table('cafe_tables')->insert([
                'table_number' => 'T' . $i,
                'capacity' => 4,
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}