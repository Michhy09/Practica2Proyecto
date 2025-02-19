<?php

namespace Database\Seeders;

use App\Models\Plaza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plaza::factory(5)->create();
    }
}
