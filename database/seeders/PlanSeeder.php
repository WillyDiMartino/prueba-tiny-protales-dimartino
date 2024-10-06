<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
            'id' => 1,
            'title' => '1 Mes',
            'access_to' => 'Disfruta de todo nuestro contenido por un mes',
            'price' => '200000',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'id' => 2,
            'title' => '6 Mes',
            'access_to' => 'Disfruta de todo nuestro contenido por seis mes',
            'price' => '900000',
            'created_at' => now(),
            'updated_at' => now(),  
            ],
            [
            'id' => 3,
            'title' => '1 Año',
            'access_to' => 'Disfruta de todo nuestro contenido por un año',
            'price' => '1800000',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
