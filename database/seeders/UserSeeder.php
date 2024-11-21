<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.`
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Azizbek',
            'role_id' => 1,
            'email' => 'webcoderazizbek@gmail.com',
            'password' => Hash::make('Azizbek987'),
        ]);

        User::create([
            'name' => 'Jamshid',
            'role_id' => 2,
            'email' => 'webjam@gmail.com',
            'password' => Hash::make('Azizbek987'),

        ]);
        User::create([
            'name' => 'VEL',
            'role_id' => 3,
            'email' => 'obitouchiha@gmail.com',
            'password' => Hash::make('Azizbek987'),

        ]);
    }
}
