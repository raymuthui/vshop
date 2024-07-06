<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Dolor esse consequatlaborum.',
            'price' => 19.03,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Eiusmod eiusmod exercitation commodo magna laboris pariatur esse ad deserunt commodo. Ipsum irure pariatur excepteur nulla duis fugiat. Velit tempor eu Lorem ea ut non tempor consectetur magna magna qui. Ex ad anim commodo irure ea cillum velit occaecat aliquip veniam ullamco cillum laborum culpa. Est sit anim quis consectetur elit incididunt eu fugiat reprehenderit qui Lorem fugiat deserunt. Laborum duis sit eu reprehenderit aliquip tempor ipsum proident ipsum occaecat ullamco ut voluptate occaecat. Cupidatat proident cupidatat duis aliqua in culpa do veniam.'
        ]);
    }
}
