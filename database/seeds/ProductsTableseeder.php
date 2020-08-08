<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'モリンガ '.$i,
                'slug' => 'モリンガ-'.$i,
                'details' => 'モリンガ',
                'price' => rand(1000, 100056),
                'description' =>'モリンガ',
                        ]);
        }
    }
}
