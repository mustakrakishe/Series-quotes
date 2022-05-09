<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genders = ['male', 'female'];
        $gender = $genders[array_rand($genders)];

        return [
            'name' => $this->faker->unique()->name($gender),
            'birthday' => $this->faker->date('Y-m-d', '1990-12-31'),
            'occupations' => $this->faker->words($this->numberBetween(1, 3)),
            'img' => $this->faker->unique()->imageUrl(),
            'nickname'=> $this->faker->unique()->word(),
            'portrayed' => $this->faker->unique()->name($gender),
        ];
    }
}
