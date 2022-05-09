<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Episode;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episodeIds = Episode::pluck('id');
        $episodeIdKey = 0;
        $episodeIdsKeyMax = count($episodeIds) - 1;

        foreach (Character::all() as $character) {
            $quoteCount = rand(
                env('SEEDER_QUOTE_PER_CHARACTER_MIN'),
                env('SEEDER_QUOTE_PER_CHARACTER_MAX')
            );

            Quote::factory()
                ->count($quoteCount)
                ->for($character)
                ->sequence(function ($sequence) use ($episodeIds, &$episodeIdKey, &$episodeIdsKeyMax) {
                    $episodeId = $episodeIds[$episodeIdKey];
                
                    $episodeIdKey = $episodeIdKey < $episodeIdsKeyMax
                        ? $episodeIdKey + 1
                        : 0;

                    return  [
                        'episode_id' => $episodeId,
                    ];
                })
                ->create();
        }
    }
}
