<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BabyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [ 
            'image' => $this->faker->image('public/storage/images/baby',640,480, null, false),
        ];
    }
}
