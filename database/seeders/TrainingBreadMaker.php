<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class TrainingBreadMaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data Type
        $dataType = $this->dataType('slug', 'trainings');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'trainings',
                'display_name_singular' => 'Training',
                'display_name_plural'   => 'Trainings',
                'icon'                  => 'fal fa-user-graduate',
                'model_name'            => 'App\\Models\\Training',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
                'details'               =>
                    array (
                        'order_column' => 'ordering',
                        'order_display_column' => 'title',
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
            'title'   => 'Training',
            'url'     => '',
            'route'   => 'voyager.trainings.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fal fa-user-graduate',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 10,
            ])->save();
        }

        //Permissions
        Permission::generateFor('trainings');



        //Data Rows
        $pageDataType = DataType::where('slug', 'trainings')->firstOrFail();
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

        $dataRow = $this->dataRow($pageDataType, 'detail');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => __('voyager::seeders.data_rows.body'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                ],
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
                        'width' => '2',
                    ],
                    'resize' => [
                        'width'  => '1000',
                        'height' => 'null',
                    ],
                    'quality'    => '90%',
                    'upsize'     => true,
                ],
                'order' => 3,
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
                'order'        => 4,
                'details'      => [
                    'display' => [
                        'width' => '3',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'icon');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Icon',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 5,
                'details'      => [
                    'display' => [
                        'width' => '2',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Title',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 6,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.meta_description'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 7,
                'details'      => [
                    'display' => [
                        'width' => '5',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_keywords');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.meta_keywords'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 8,
                'details'      => [
                    'display' => [
                        'width' => '4',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin' => 'title',
                    ],
                    'validation' => [
                        'rule'  => 'unique:services,slug',
                    ],
                    'display' => [
                        'width' => '3',
                    ],
                ],
                'order' => 9,
            ])->save();
        }


        $dataRow = $this->dataRow($pageDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => __('voyager::seeders.data_rows.status'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 8,
                'details'      => [
                    'checked' => true,
                    'display' => [
                        'width' => '1',
                    ],
                ],
                'order' => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'in_menu');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Show in Menu',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 8,
                'details'      => [
                    'checked' => true,
                    'display' => [
                        'width' => '1',
                    ],
                ],
                'order' => 11,
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
                'order'        => 12,
                'details'      => [
                    'display' => [
                        'width' => '2',
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
