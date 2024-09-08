<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Test User',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',

        ]);
        \App\Models\User::create([
            'name' => 'Test User',
            'username' => 'tutor',
            'password' => bcrypt('tutor'),
            'role' => 'tutor',
        ]);
        \App\Models\User::create([
            'name' => 'Test User',
            'username' => 'siswa',
            'password' => bcrypt('siswa'),
            'role' => 'siswa',
        ]);
    }
}
