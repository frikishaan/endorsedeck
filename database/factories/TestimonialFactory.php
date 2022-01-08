<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->sentence($this->faker->numberBetween(10, 25)),
            'user.name' => $this->faker->name(),
            'user.email' => $this->faker->safeEmail(),
            'user.title' => $this->faker->jobTitle(),
            'user.avatar' => '',
            'is_approved' => $this->faker->boolean(70)
        ];
    }
}
