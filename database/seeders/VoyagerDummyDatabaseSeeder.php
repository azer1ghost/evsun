<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            PagesTableSeeder::class,
            TranslationsTableSeeder::class,
            SocialBreadMaker::class,
            SlideBreadMaker::class,
            ServiceBreadMaker::class,
            SolutionBreadMaker::class,
            ProductBreadMaker::class,
            AttributeBreadMaker::class,
            BrandBreadMaker::class,
            ContactBreadMaker::class,
            ProductCategoriesBreadMaker::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}
