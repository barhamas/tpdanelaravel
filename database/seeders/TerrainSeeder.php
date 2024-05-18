<?php

namespace Database\Seeders;

use App\Models\Terrain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Terrain::factory()->count(50)->create();

    }
}
