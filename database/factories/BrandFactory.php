<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $model = new $this->model;

        $folder = $model->getTable();

        Storage::makeDirectory($folder);

        return [
            'image' => "$folder/".$this->faker->image(public_path("storage/$folder"),1920,1024, null, false),
            'title' => $this->faker->realText( 15),
            'url'  => $this->faker->url(),
        ];
    }
}
