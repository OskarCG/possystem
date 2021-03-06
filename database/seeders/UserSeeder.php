<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Oskar',
            'phone' => '954173405',
            'email' => 'oskarcg801@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'name' => 'Oscar Torres',
            'phone' => '985461371',
            'email' => 'oscar.grimaldo@umnsm.edu.pe',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('admin'),
        ]);
    }
}
