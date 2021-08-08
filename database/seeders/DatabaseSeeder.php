<?php

namespace Database\Seeders;

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
            SocialsTableSeeder::class
        ]);

         \App\Models\Service::factory(6)->create();
         \App\Models\Training::factory(6)->create();
         \App\Models\Slide::factory(3)->create();
    }
}
