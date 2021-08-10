<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;
use TCG\Voyager\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::all();

        Role::where('name', 'developer')->firstOrFail()->permissions()->sync(
            $permissions->pluck('id')->all()
        );

        Role::where('name', 'admin')->firstOrFail()->permissions()->sync(
            $permissions->pluck('id')->all()
        );
    }
}
