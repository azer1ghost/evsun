<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\ProductCategory;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function all() {
        $files_arr = scandir(__DIR__);
        foreach ($files_arr as $key => $file){
            if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
                $this->call( explode('.', $file)[0] );
            }
        }
    }

    public function run()
    {
        //$this->all();

        $this->call([
            VoyagerDatabaseSeeder::class,
            VoyagerDummyDatabaseSeeder::class,
            WebsiteMenuSeeder::class,
            SocialsTableSeeder::class,
        ]);

         \App\Models\Service::factory(2)->state([
             'advanced' => true,
         ])->has(
             Service::factory(6)->state([
                 'in_menu' => false,
             ]), 'subServices'
         )->create();

         \App\Models\Solution::factory(4)->create();
         \App\Models\Slide::factory(3)->create();
         \App\Models\Brand::factory(3)->create();

        \App\Models\ProductCategory::factory(4)->has(
             \App\Models\Product::factory(5)
                 ->hasAttached(
                     Attribute::factory(3),
                     ['value' => 'test']
                 )
         , 'products')->create();

    }
}
