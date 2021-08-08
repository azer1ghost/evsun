<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class SlideBreadMaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'slides');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'slides',
                'display_name_singular' => 'Slide',
                'display_name_plural'   => 'Slides',
                'icon'                  => 'fal fa-presentation',
                'model_name'            => 'App\\Models\\Slide',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               =>
                    array (
                        'order_column' => 'ordering',
                        'order_display_column' => 'image',
                        'order_direction' => 'asc',
                        'default_search_key' => NULL,
                        'scope' => NULL,
                    )
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Slides',
            'url'     => '',
            'route'   => 'voyager.slides.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fal fa-presentation',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 10,
            ])->save();
        }

        //Permissions
        Permission::generateFor('slides');

        //Content

        //Data Rows
        $pageDataType = DataType::where('slug', 'slides')->firstOrFail();
        $dataRow = $this->dataRow($pageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => __('voyager::seeders.data_rows.post_image'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                    'resize' => [
                        'width'  => '1000',
                        'height' => 'null',
                    ],
                    'quality'    => '90%',
                    'upsize'     => true,
                ],
                'order' => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.title'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'text');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'Text',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'btnText');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Button text',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'btnUrl');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Button link',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Status',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
                'details'      => [
                    'display' => [
                        'width' => '1',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'ordering');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'Order',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
                'details'      => [
                    'display' => [
                        'width' => '1',
                    ],
                ],
            ])->save();
        }

    }

    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }

    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
