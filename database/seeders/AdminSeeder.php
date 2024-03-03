<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Adam Bernie',
      'email' => 'adambernie@tenantconnect.com',
      'phone' => '1234567890',
      'email_verified_at' => now(),
      'password' => '$2y$12$y5NIOyUXexY2XERK4qGZfO2Az./3sPYV77QYCzjZLid0aVbrrmGWi',
    ])->assignRole('owner', 'admin');
  }
}
