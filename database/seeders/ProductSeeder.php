<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'productname' => 'Coca Cola',
                'qty' => 10,
                'price' => 0.75,
            ],
            [
                'productname' => 'Pepsi',
                'qty' => 20,
                'price' => 0.75,
            ],
            [
                'productname' => 'Angkor Beer',
                'qty' => 50,
                'price' => 1.25,
            ],
            [
                'productname' => 'Anchor Beer',
                'qty' => 30,
                'price' => 1.00,
            ],
        ]);
    }
}