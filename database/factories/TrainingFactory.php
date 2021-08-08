<?php

namespace Database\Factories;

use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class TrainingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Training::class;

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
            'icon' => "fab fa-facebook",
            'image' => "$folder/".$this->faker->image(public_path("storage/$folder"),400,300, null, false),
            'title' => $this->faker->realText( 20),
            'detail' => $this->faker->text(),
            'meta_title' => $this->faker->realText( 50),
            'meta_description' => $this->faker->realTextBetween(160),
            'meta_keywords' => implode(',' ,$this->faker->words( 2)),
            'slug' => $this->faker->slug(),
        ];
    }
}
