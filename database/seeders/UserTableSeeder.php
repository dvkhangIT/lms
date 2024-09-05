<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      // Admin
      [
        'name' => 'Admin',
        'username' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('111'),
        'role' => 'admin',
        'status' => '1',
      ],
      // Instructor
      [
        'name' => 'Instructor',
        'username' => 'instructor',
        'password' => Hash::make('111'),
        'email' => 'instructor@gmail.com',
        'role' => 'instructor',
        'status' => '1',
      ],
      // User Data
      [
        'name' => 'User',
        'username' => 'user',
        'password' => Hash::make('111'),
        'email' => 'user@gmail.com',
        'role' => 'user',
        'status' => '1',
      ]
    ]);
  }
}
