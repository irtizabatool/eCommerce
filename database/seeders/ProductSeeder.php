<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //
        DB::table('products')->insert([
                     [
                'name'=>'PANasonic Tv',
                'price'=>'15,000',
                'category'=>'Electronics',
                'description'=>'Smart tv display',
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/ua32t4410akxxl/gallery/in-hd-t4300-ua32t4410akxxl-432183238?$1300_1038_PNG$'
            ],
            [
                'name'=>'LG Tv',
                'price'=>'35,000',
                'category'=>'Electronics',
                'description'=>'Good quality display television',
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/in/ua32t4410akxxl/gallery/in-hd-t4300-ua32t4410akxxl-432183238?$1300_1038_PNG$'
            ],
            [
                'name'=>'Iphone',
                'price'=>'1,35,000',
                'category'=>'Phones',
                'description'=>'iphone 13 pro max',
                'gallery'=>'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-model-unselect-gallery-1-202207?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1654893619853'
            ]
        ]);
    }
}
