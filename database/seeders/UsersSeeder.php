<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            // Criando um usuario exemplo, bcrypt é para criptografar
            'name' => 'Carlos Ferreira',
            'email' => 'carlosferreira@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
