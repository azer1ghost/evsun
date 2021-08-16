<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */

    /*
        $table->string('name')->nullable();
        $table->string('serial')->unique();
        $table->string('image')->nullable();
        $table->string('price')->nullable();
    */

    public function definition()
    {
        $model = new $this->model;

        $folder = $model->getTable();

        Storage::makeDirectory($folder);

        return [
            'name' => $this->faker->word(),
            'serial' => $this->faker->unique()->slug(),
            'images' => "$folder/".$this->faker->image(public_path("storage/$folder"),'972px','300px', null, false),
            'price' => random_int(100, 1000),
        ];
    }
}
