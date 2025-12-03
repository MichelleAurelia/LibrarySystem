<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Jeisen',
            'email' => 'Jeisen@example.com',
            'password' => Hash::make('Jeisen123'),
        ]);

        User::create([
            'name' => 'Michelle',
            'email' => 'michelle@example.com',
            'password' => Hash::make('michelle123'),
        ]);

        User::create([
            'name' => 'Carlson',
            'email' => 'carlson@example.com',
            'password' => Hash::make('carlson123'),
        ]);

        User::create([
            'name' => 'John',
            'email' => 'john@example.com',
            'password' => Hash::make('john123'),
        ]);

        User::create([
            'name' => 'Samuel',
            'email' => 'samuel@example.com',
            'password' => Hash::make('samuel123'),
        ]);
    }
}
