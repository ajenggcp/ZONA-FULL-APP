<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;

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
        foreach ($users as $key => $users) {
            User::create(
                [
                    'name' => 'test1',
                    'email' => 'testtt@gmail.com',
                    'password' => bcrypt('test1234'),
                    'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                    'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                ],[
            'name' => 'test2',
            'email' => 'testdua@gmail.com',
            'password' => bcrypt('test1234'),
                'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
                'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            ]
                );
        }
        // $users=[
        //     [
        //     'name' => 'test1',
        //     'email' => 'testtt@gmail.com',
        //     'password' => bcrypt('test1234'),
        //     'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        //     'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        //     ],
        //     [
        //     'name' => 'test2',
        //     'email' => 'testdua@gmail.com',
        //     'password' => bcrypt('test1234'),
        //         'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        //         'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
        //     ]
        // ]; 
    }
}
