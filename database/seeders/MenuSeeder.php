<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'menu_name' => 'makanan1',
            'menu_price' => 50000,
            'menu_image' => 'makanan.jpg',
            'menu_desc' => 'nasi ayam',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'makanan2',
            'menu_price' => 55000,
            'menu_image' => 'makanan2.jpg',
            'menu_desc' => 'nasi ikan',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'makanan3',
            'menu_price' => 60000,
            'menu_image' => 'makanan3.jpg',
            'menu_desc' => 'nasi kepiting',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'makanan4',
            'menu_price' => 65000,
            'menu_image' => 'makanan4.jpg',
            'menu_desc' => 'nasi goreng',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'minuman1',
            'menu_price' => 20000,
            'menu_image' => 'minuman1.jpg',
            'menu_desc' => 'teh',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'minuman2',
            'menu_price' => 25000,
            'menu_image' => 'minuman2.jpg',
            'menu_desc' => 'susu',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'minuman3',
            'menu_price' => 30000,
            'menu_image' => 'minuman3.jpg',
            'menu_desc' => 'kopi',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'minuman4',
            'menu_price' => 35000,
            'menu_image' => 'makanan4.jpg',
            'menu_desc' => 'boba',
        ]);
    }
}
