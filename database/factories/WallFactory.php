<?php

namespace Database\Factories;

use App\Models\Wall;
use Illuminate\Database\Eloquent\Factories\Factory;

class WallFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wall::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word() . ' Wall',
            'description' => $this->faker->sentence($this->faker->numberBetween(8, 15)),
            'thankyou_page.title' => $this->faker->sentence($this->faker->numberBetween(2,4)),
            'thankyou_page.message' => $this->faker->sentence($this->faker->numberBetween(10, 15))
        ];
    }
}
