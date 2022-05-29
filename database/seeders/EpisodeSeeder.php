<?php

namespace Database\Seeders;

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    private $total = 30;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episodes = Episode::factory()
            ->count($this->total)
            ->create();
    }
}
