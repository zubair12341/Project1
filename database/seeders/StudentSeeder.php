<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Student',
            'last_name' => 'User',
            'email' => 'student@example.com',
            'password' => Hash::make('student123'),
            'role' => 'student',
            // Add other student details
        ]);
    }
}
