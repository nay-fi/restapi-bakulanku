<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //memasukkan data user ke dalam table users
        $datas = array(
            array(
                "name" => "admin",
                "email" => "admin@bakulanku.com",
                "password" => "masukaja"
            ),
            array(
                "name" => "admin2",
                "email" => "admin2@bakulanku.com",
                "password" => "masukaja"
            ),
        );

        foreach ($datas as $data) {
            User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
            ]);
        }
    }
}
