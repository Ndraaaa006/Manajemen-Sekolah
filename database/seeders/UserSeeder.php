<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Bapak Guru',
            'email' => 'guru@sekolah.com',
            'password' => Hash::make('password'),
            'role' => 'guru',
        ]);

        User::create([
            'name' => 'Siswa Teladan',
            'email' => 'siswa@sekolah.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
        ]);
    }
}
