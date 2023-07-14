<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nama' => 'Administator',
                'usia' => '28',
                'jenis_kelamin' => 'laki-laki',
                'username' => 'admin@admin',
                'password' => Hash::make('12345678'),
                'level' => '1',
            ],
            [
                'nama' => 'Elsa Putri',
                'usia' => '25',
                'jenis_kelamin' => 'perempuan',
                'username' => 'elsa@konselor',
                'password' => Hash::make('12345678'),
                'level' => '2',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
