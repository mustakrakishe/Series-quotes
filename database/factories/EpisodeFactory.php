<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => substr($this->faker->unique()->sentence(2, 5), 0, -1),
            'air_date' => $this->faker
                ->dateTimeBetween('2008-01-20', '2013-09-29')
                ->format('Y-m-d'),
        ];
    }
}
