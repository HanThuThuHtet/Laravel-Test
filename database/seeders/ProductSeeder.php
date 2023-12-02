<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Coffee',
                'price' => 2800,
                'stock' => 50
            ],
            [
                'name' => 'Tea',
                'price' => 1700,
                'stock' => 60
            ],
        ]);
    }
}
