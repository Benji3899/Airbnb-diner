<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'fullname' => 'admin',
            'email' => 'admin@hotmail.fr',
            'password' => Hash::make('admin'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'fullname' => 'user',
            'email' => 'user@hotmail.fr',
            'password' => Hash::make('user'),
            'role' => 'user'
        ]);

        // Exemple du seeder de base
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
