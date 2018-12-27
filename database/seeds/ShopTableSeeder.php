<?php

use Illuminate\Database\Seeder;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Shop::class)->create([
            'name' => 'MisCojonesShop',
            'email' => 't1@t1.es',
            'password' => bcrypt('111111'),
        ]);
    }
}
