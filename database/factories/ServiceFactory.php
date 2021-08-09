<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

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
            'icon' => "$folder/".$this->faker->image(public_path("storage/$folder"),300,300, null, false),
            'image' => "$folder/".$this->faker->image(public_path("storage/$folder"),'972px','300px', null, false),
            'title' => $this->faker->realText( 20),
            'detail' => $this->faker->text(),
            'meta_title' => $this->faker->realText( 50),
            'meta_description' => $this->faker->realTextBetween(160),
            'meta_keywords' => implode(',' ,$this->faker->words( 3)),
            'slug' => $this->faker->slug(),
        ];
    }
}

