<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Candidate;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin1',
            'password' => 'admin12',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'admin2',
            'password' => 'admin12',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'user1',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user2',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user3',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user4',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user5',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user6',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user7',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user8',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user9',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user10',
            'password' => 'user12',
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'user11',
            'password' => 'user12',
            'role' => 'user',
        ]);
        Candidate::factory()->create([
            'name' => 'Mango',
            'description' => 'Mango is a fruit',
            'image' => 'mango.jpg',
            'vote_count' => '0'
        ]);
        Candidate::factory()->create([
            'name' => 'Banana',
            'description' => 'Banana is a fruit',
            'image' => 'banana.jpg',
            'vote_count' => '0'
        ]);
        Candidate::factory()->create([
            'name' => 'Durian',
            'description' => 'Durian is a fruit',
            'image' => 'durian.jpg',
            'vote_count' => '0'
        ]);
        Candidate::factory()->create([
            'name' => 'Strawberry',
            'description' => 'Strawberry is a fruit',
            'image' => 'strawberry.jpg',
            'vote_count' => '0'
        ]);
    }
}
