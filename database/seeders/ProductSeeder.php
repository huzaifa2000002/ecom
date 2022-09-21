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
        //
        DB::table('products')->insert([
            [

                'name'=>'Dawlance',
                'price'=> '249$',
                'product'=>'Kitchen Appliances',
                'description'=>'keeps cool for 24hr without electicity, low consumption',
                'gallery'=>'https://images.priceoye.pk/dawlance-11-cu-ft-chrome-9173wb-pakistan-priceoye-fd0tc.jpg',


            ],
            [

                'name'=>'TCL',
                'price'=> '399$',
                'product'=>'television',
                'description'=>'120hz 4k Smart',
                'gallery'=>'https://www.servitudeindia.com/ecom-demo/multi-vendor/image/cache/catalog/LLOYD/LED/L32HB260B/zoom1-min-1000x1000.jpg'


            ],
            [

                'name'=>'Techno',
                'price'=> '249$',
                'product'=>'phone',
                'description'=>'4 GB RAM 32 MP CAMERA',
                'gallery'=>'https://images.priceoye.pk/tecno-pova-3-pakistan-priceoye-380uo.jpg'


            ],
            [

                'name'=>'Samsung',
                'price'=> '499$',
                'product'=>'television',
                'description'=>'4k Ultra HD SMART DOLBY 5.0 ULTRA SLIM',
                'gallery'=>'https://www.nexgenshop.pk/wp-content/uploads/2019/11/Samsung-50-J5500-Flat-Full-HD-Smart-LED-TV.jpg'


            ],
        ]);
    }
}
