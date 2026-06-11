<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name'     => 'Administrador',
            'cedula'   => '123456789',
            'email'    => 'admin@thousandgym.com',
            'password' => Hash::make('admin12345'),
        ]);

        $admin->assignRole('admin');
    }
}