<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Setting::setMany([
            'default_locate' => 'ar',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled' => true,
            'auto_approve_reviews' => true,
            'supported_currency' => ['USD', 'LE','SAR'],
            'default_currency' => 'USD',
            'store_email' => 'hs777it@gmail.com',
            'search_engine' => 'mysql',
            'local_shipping_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' =>[
                'store_name' => 'HS Store',
                'free_shipping_label' => 'Free Shipping',
                'local_shipping_label' => 'Local Shipping',
                'outer_shipping_label' => 'Outer Shipping',
            ],
      ]);

    }

    // public function run()
    // {
    //     Setting::create([
    //         'key' => 'My name',
    //         'is_translatable' => 0,
    //         'plain_value' => 'Hussain Saad',
    //     ]);
    // }
}
