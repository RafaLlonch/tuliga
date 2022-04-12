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
        User::create([
            'name' => 'Rafa Llonch',
            'email' => 'rafa_sbd@hotmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Rubén',
            'email' => 'ruben@hotmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Ana',
            'email' => 'ana@hotmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Usuario');

        User::create([
            'name' => 'Maria',
            'email' => 'maria@hotmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Usuario');
    }
}
