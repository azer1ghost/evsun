<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class WebsiteMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menu = Menu::where('name', 'website')->select('id')->firstOrFail();

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Ana səhifə',
            'url'     => '',
            'route'   => 'homepage',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Xidmətlər',
            'url'     => '',
            'route'   => 'services',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Blog',
            'url'     => '',
            'route'   => 'blog',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Təlimlər',
            'url'     => '',
            'route'   => 'trainings',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }


        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Haqqımızda',
            'url'     => '/about',
            'route'   => null
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }


        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Əlaqə',
            'url'     => '',
            'route'   => 'contact',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => null,
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

    }
}
