<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    //未使用
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => '川野光里',
            'email' => 'hik.poc@gmail.com',
            'email_verified_at' => '',
            'password' => '',
            'remember_token' => '',
        ]);
    }
}
