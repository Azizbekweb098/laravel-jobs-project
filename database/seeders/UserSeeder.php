<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Azizbek',
            'role_id' => 1,
            'email' => 'webcoderaizbek@gmail.com',
            'password' => Hash::make('root'),
        ]);
    }
}
