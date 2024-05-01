<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // A
        Level::create([
            "name" => "A1",
        ]);
        Level::create([
            "name" => "A2",
        ]);

        // B
        Level::create([
            "name" => "B1",
        ]);
        Level::create([
            "name" => "B2",
        ]);

        // C
        Level::create([
            "name" => "C1",
        ]);
        Level::create([
            "name" => "C2",
        ]);
    }
}
