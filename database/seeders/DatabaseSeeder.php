<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User1',
            'email' => 'ABCXYZ@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User2',
            'email' => 'LeThi2@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test User3',
            'email' => 'AnhBa@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User4',
            'email' => 'NguyenVan4@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User5',
            'email' => 'LeVan5@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User6',
            'email' => 'ABC@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User7',
            'email' => 'XYZ@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User8',
            'email' => 'AAA@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User9',
            'email' => '12345@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User10',
            'email' => '220803@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User11',
            'email' => '121212@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User12',
            'email' => 'testXYZ@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User13',
            'email' => 'testABC@example.com',
        ]);
    }
}
