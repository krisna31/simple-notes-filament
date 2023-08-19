<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory()->create([
            'name' => 'admin'
        ]);

        Role::factory()->create([
            'name' => 'user'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        \App\Models\User::factory(50)->create();
    }
}
