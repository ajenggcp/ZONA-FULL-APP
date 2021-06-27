<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = User::all();
        User::create(
            [
            'name' => 'test akun',
            'email' => 'test@gmail.com',
            'password' => 'test1234',
            ],
            [
            'name' => 'test',
            'email' => 'test2@gmail.com',
            'password' => 'test1234',
            ]
            );
    }
}
