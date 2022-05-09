<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episodes = Episode::factory()
            ->count(env('SEEDER_EPISODE_COUNT'))
            ->create();
    }
}
