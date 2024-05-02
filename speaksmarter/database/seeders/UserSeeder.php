<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = User::create([
            'name' => 'administrator',
            'email' => 'admin@speaksmarter.es',
            'password' => bcrypt('admin')
        ])->assignRole('administrator');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@speaksmarter.es',
            'password' => bcrypt('editor')
        ])->assignRole('editor');
    }
}
