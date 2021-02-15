<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->name(),
            'description' => $this->faker->realText(mt_rand(10, 100)),
            'img' => $this->faker->randomElement(["images/landscape1.jpeg", "images/landscape2.jpeg", "images/landscape3.jpeg", "images/landscape4.jpeg", "images/landscape5.jpeg", "images/landscape6.jpeg"]),
            'featured' => $this->faker->randomElement([true, false]),
            'created_on' => $this->faker->date(),
        ];
    }
}
