<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageDescriptionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $values = ['home', 'couple', 'family', 'baby', 'event'];
        $numberOfValues = 5;
        return [
            'title' => $this->faker->words(1, true),
            'descriptions' => $this->faker->text(),
            'page_name' => $this->faker->unique()->randomElement($values, $numberOfValues),
        ];
    }
}
