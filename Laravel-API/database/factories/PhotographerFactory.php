<?php

namespace Database\Factories;

use App\Models\Photographer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotographerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photographer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'bio' => $this->faker->realText(mt_rand(70, 250)),
            'profile_picture' => $this->faker->randomElement(["images/profile1.jpeg", "images/profile2.jpeg", "images/profile3.jpeg", "images/profile4.jpeg", "images/profile5.jpeg", "images/profile6.jpeg"])
        ];
    }
}
