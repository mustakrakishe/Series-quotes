<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Character::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'name' => $this->faker->unique()->name($gender),
            'birthday' => $this->faker->date('Y-m-d', '1990-12-31'),
            'occupations' => json_encode($this->faker->words(
                $this->faker->numberBetween(1, 3)
            )),
            'img' => $this->faker->unique()->imageUrl(),
            'nickname'=> $this->faker->unique()->word(),
            'portrayed' => $this->faker->unique()->name($gender),
        ];
    }
}
