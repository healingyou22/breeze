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
            'menu_name' => 'Steak Marinade',
            'menu_price' => 50000,
            'menu_image' => 'makanan1.jpg',
            'menu_desc' => 'It’s deliciously robust and the perfect flavor pairing to rich beefy steaks, and delicious taste!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Honolulu Ice Cream',
            'menu_price' => 55000,
            'menu_image' => 'makanan2.jpg',
            'menu_desc' => 'Who doesnt like great ice cream with pineapple chunks. People loved it! yummy and tasty gelato',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Fish Tacos',
            'menu_price' => 60000,
            'menu_image' => 'makanan3.jpg',
            'menu_desc' => 'Yum! Try the frest fish and chips. This Fish Tacos that melt in your mouth. Done perfectly!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Biscoff Cheesecake',
            'menu_price' => 65000,
            'menu_image' => 'makanan4.jpg',
            'menu_desc' => 'No Bake Mini Lotus Biscoff Cheesecake which has a sweet, soft, and crunchy taste. You must try this!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Butter Trout',
            'menu_price' => 50000,
            'menu_image' => 'makanan5.jpg',
            'menu_desc' => 'Italian herb seasoning, chopped fresh parsley and garlic give great flavor to the fish! So Healthy!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Classic Pizza',
            'menu_price' => 55000,
            'menu_image' => 'makanan6.jpg',
            'menu_desc' => 'The best pizza recipe made with homemade crust, quick tomato sauce, and just the right amount of cheese',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Smoothie Bowls',
            'menu_price' => 60000,
            'menu_image' => 'makanan7.jpg',
            'menu_desc' => 'A creamy smoothie, you can eat it with a spoon. Top with fresh fruit, granola, or any other healthy toppings',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Butternut puree',
            'menu_price' => 65000,
            'menu_image' => 'makanan8.jpg',
            'menu_desc' => 'The toasted hazelnuts with crunchy touch and the poached egg and mash yolk, is just magical!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Cocktail Lemon-berry',
            'menu_price' => 20000,
            'menu_image' => 'minuman1.jpg',
            'menu_desc' => 'This cocktail full of fresh lemon, sweet strawberry, and beautiful ripe strawberries. Delightful and refreshing!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Monkeypod Mai Tai',
            'menu_price' => 25000,
            'menu_image' => 'minuman2.jpg',
            'menu_desc' => 'This Hawaiian Mai Tai Monkeypod is one of the most refreshing and delicious cocktails. With some citrus lemon and orange zest',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Twisted Mermaid',
            'menu_price' => 30000,
            'menu_image' => 'minuman3.jpg',
            'menu_desc' => 'Jump off the deep and go crazy with our Twisted Mermaid! Made with Blue Curacao, Orange juice and Passion Fruit Juice!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Pyrat Rum Punch',
            'menu_price' => 35000,
            'menu_image' => 'minuman4.jpg',
            'menu_desc' => 'The cocktail, served in a hollow pineapple, is a combination of Pyrat Pistol rum, Galliano, apricot brandy, and tropical juices',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Dalgona Hot Choco',
            'menu_price' => 20000,
            'menu_image' => 'minuman5.jpg',
            'menu_desc' => 'Dalgona Whipped Chocolate is the caffeine-free version of the trendy Dalgona Coffee and is a perfect treat for the kids',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Coconut Key Lime',
            'menu_price' => 25000,
            'menu_image' => 'minuman6.jpg',
            'menu_desc' => 'When youre in the mood for tropical drink, Its a fun twist on the coconut drink, featuring coconut milk and key lime juice',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Classic Mai Tai',
            'menu_price' => 30000,
            'menu_image' => 'minuman7.jpg',
            'menu_desc' => 'Fun and tasty tropical cocktail that everyone loves! The sweet but strong flavors of this drink go perfectly, yummy!',
        ]);
        DB::table('menus')->insert([
            'menu_name' => 'Dulce Milshake',
            'menu_price' => 35000,
            'menu_image' => 'minuman8.jpg',
            'menu_desc' => 'Is a intensely delicious, creamy, and thick milkshake filled with flavor and goodness of caramel, all in one glass',
        ]);
    }
}
