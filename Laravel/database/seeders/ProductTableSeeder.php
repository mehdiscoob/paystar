<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Products\Entities\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()->count(20)->create();
    }
}
