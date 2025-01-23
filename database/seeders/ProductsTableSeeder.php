<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            'id' => 1,
            'maker' => '',
            'name' => 'ハンバーガー',
            'description' => '',
            'price' => 170,
            'cost' => 70,
            'stock' => 150,
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'maker' => '',
            'name' => 'ダブルチーズバーガー',
            'description' => '',
            'price' => 430,
            'cost' => 300,
            'stock' => 100,
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'maker' => '',
            'name' => 'ビッグマック',
            'description' => '',
            'price' => 480,
            'cost' => 350,
            'stock' => 100,
        ]);
    }
}
