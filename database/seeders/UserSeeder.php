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
         User::firstOrCreate(
            ['email' => 'Jeisen@example.com'],
            [
                'name' => 'Jeisen',
                'password' => Hash::make('Jeisen123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'michelle@example.com'],
            [
                'name' => 'Michelle',
                'password' => Hash::make('michelle123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'carlson@example.com'],
            [
                'name' => 'Carlson',
                'password' => Hash::make('carlson123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John',
                'password' => Hash::make('john123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'samuel@example.com'],
            [
                'name' => 'Samuel',
                'password' => Hash::make('samuel123'),
            ]
        );

        // ADMIN BARU
        User::firstOrCreate(
            ['email' => 'adminnn1@library.com'],
            [
                'name' => 'admin001',
                'password' => Hash::make('admin11123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'adminnn2@library.com'],
            [
                'name' => 'admin002',
                'password' => Hash::make('admin21123'),
            ]
        );
    }
}
