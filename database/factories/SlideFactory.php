<?php

namespace Database\Factories;

use App\Models\Slide;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class SlideFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Slide::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {

        $model = new $this->model;

        $folder = $model->getTable();

        Storage::makeDirectory($folder);

        return [
            'image' => "$folder/".$this->faker->image(public_path("storage/$folder"),1920,1024, null, false),
            'title' => $this->faker->realText( 15),
            'text'  => $this->faker->text(),
            'btnText'  => $this->faker->word(),
            'btnUrl'  => $this->faker->url(),
        ];
    }
}
