<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Phuoc',
                'email' => 'phuoc@gmail.com',
                'role' => 'administrator',
                'password' => bcrypt('1'),
                'picture' => './frontend/img/shop01.png',
                'phone' => '12345678',
                'address' => "Hue",
            ],
            [
                'name' => 'Duy',
                'email' => 'duy@gmail.com',
                'role' => 'administrator',
                'password' => bcrypt('1'),
                'picture' => './frontend/img/shop01.png',
                'phone' => '12345678',
                'address' => "Hue",
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'role' => 'owner',
                'password' => bcrypt('1'),
                'picture' => './frontend/img/shop01.png',
                'phone' => '12345678',
                'address' => "DN",
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'role' => 'owner',
                'password' => bcrypt('1'),
                'picture' => './frontend/img/shop01.png',
                'phone' => '12345678',
                'address' => "HN",
            ], [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'role' => 'user',
                'password' => bcrypt('1'),
                'picture' => './frontend/img/shop01.png',
                'phone' => '12345678',
                'address' => "HCM",
            ],
        ];
        User::insert($data);
    }
}
