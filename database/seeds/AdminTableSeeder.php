<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Admin::class)->create([
            'name' => 'admin',
            'email' => 'admin@admin.es',
            'password' => bcrypt('111111'),
        ]);
    }
}
