<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Social::insert([
             ['name' => 'facebook', 'link' => 'facebook.com'],
             ['name' => 'linkedin', 'link' => 'linkedin.com'],
             ['name' => 'whatsapp', 'link' => 'whatsapp.com'],
             ['name' => 'telegram', 'link' => 'telegram.com']
        ]);
    }
}
