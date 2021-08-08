<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $developer = Role::where('name', 'developer')->firstOrFail();
            $admin = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Developer',
                'email'          => 'mamedovazer124@gmail.com',
                'password'       => bcrypt('4145124Azer'),
                'remember_token' => Str::random(60),
                'role_id'        => $developer->id,
            ]);

            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $admin->id,
            ]);
        }
    }
}
