<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeCharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characterIds = Character::pluck('id');
        $characterIdKey = 0;
        $characterIdsKeyMax = count($characterIds) - 1;

        foreach (Episode::all() as $episode) {
            $characterCount = rand(
                env('SEEDER_CHARACTER_PER_EPISODE_MIN'),
                env('SEEDER_CHARACTER_PER_EPISODE_MAX')
            );

            for ($i = 0; $i < $characterCount; $i++) {
                $characterId = $characterIds[$characterIdKey];

                $episode->characters()->attach($characterId);
                
                $characterIdKey = $characterIdKey < $characterIdsKeyMax
                    ? $characterIdKey + 1
                    : 0;
            }
        }
    }
}
