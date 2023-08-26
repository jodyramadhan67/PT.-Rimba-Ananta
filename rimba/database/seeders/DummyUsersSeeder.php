<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Om Operator',
                'email'=>'operator@gmail.com',
                'role'=>'operator',
                'password'=>bcrypt('1234567')
            ],
            [
                'name'=>'Om Keuangan',
                'email'=>'keuangan@gmail.com',
                'role'=>'keuangan',
                'password'=>bcrypt('1234567')
            ],
            [
                'name'=>'Om Marketing',
                'email'=>'marketing@gmail.com',
                'role'=>'marketing',
                'password'=>bcrypt('1234567')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);

        }
    }
}
