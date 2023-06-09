<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        \App\Models\User::Create([

            'name' => 'Ryan',
            'email' => 'firdausriyan402@gmail.com',
            'phone' => '0859102724182',
            'address' => 'desa pandansari ',
            'city' => 'kabupaten bogor',
            'province' => 'jawa barat',
            'zip_code' => '16720',
            'password' => bcrypt('12007948'),
            'role' => 'Admin',
            'Admin' => '1',

        ]);





       \App\Models\Product::create([
        'id_product' => 1,
        "name" => " Cilok",
        "price" => "120000",
        'stok' => 5,
        "description" => "Lorem ipsum dolor sit amet consectetur ellendus dolores vero sapiente!"
       ]);
       \App\Models\Product::create([
        'id_product' => 2,
        "name" => "Mie Ayam",
        "price" => "120000",
        'stok' => 5,
        "description" => "Lorem ipsum dolor sit amet consectetur ellendus dolores vero sapiente!"
       ]);
       \App\Models\Product::create([
        'id_product' => 3,
        "name" => "Batagoreng",
        "price" => "120000",
        'stok' => 5,
        "description" => "Lorem ipsum dolor sit amet consectetur ellendus dolores vero sapiente!"
       ]);
       \App\Models\Product::create([
        'id_product' => 4,
        "name" => "Gorengan",
        "price" => "120000",
        'stok' => 5,
        "description" => "Lorem ipsum dolor sit amet consectetur ellendus dolores vero sapiente!"
       ]);
       \App\Models\Product::create([
        'id_product' => 5,
        "name" => "Mie gebet",
        "price" => "120000",
        "description" => "Lorem ipsum dolor sit amet consectetur ellendus dolores vero sapiente!",
        'stok' => 5

       ]);
       \App\Models\Product::create([
        'id_product' => 6,
        "name" => "Bubur Ayam",
        "price" => "120000",
        'stok' => 5,
        "description" => "Lorem ipsum dolor sit amet consectetur ellendus dolores vero sapiente!"
       ]);




        //Added Start
        // $products = [
        //     [
        //         'name' => 'PHP',
        //         'image' => 'https://dummyimage.com/200x200/4D588E/fff&text=PHP',
        //         'price' => 120,
        //         'description' => 'PHP Language'
        //     ],
        //     [
        //         'name' => 'Laravel',
        //         'image' => 'https://dummyimage.com/200x200/E83A2D/fff&text=Laravel',
        //         'price' => 220,
        //         'description' => 'Laravel freamwork'
        //     ],
        //     [
        //         'name' => 'Python',
        //         'image' => 'https://dummyimage.com/200x200/000/00ff04&text=python',
        //         'price' => 300,
        //         'description' => 'Python Language'
        //     ],
        //     [
        //         'name' => 'Codeigniter',
        //         'image' => 'https://dummyimage.com/200x200/F03B06/000&text=CI',
        //         'price' => 110,
        //         'description' => 'Codeigniter freamwork'
        //     ],
        // ];

        // foreach ($products as $key => $value) {
        //     Product::create($value);
        // }
        //Added End

    }
}
