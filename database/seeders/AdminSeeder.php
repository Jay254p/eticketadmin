<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Inspector General',
            'badgenumber' => '001',
            'idnumber' => '001',
            'phonenumber' => '001',
            'email' => 'IG@acss.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('IG');

        User::create([
            'name' => 'HQ',
            'badgenumber' => '002',
            'idnumber' => '002',
            'phonenumber' => '002',
            'email' => 'hq@acss.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('HQ');

        User::create([
            'name' => 'Constable',
            'badgenumber' => '004',
            'idnumber' => '004',
            'phonenumber' => '004',
            'email' => 'constable@acss.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('CONSTABLE');
    }
}
