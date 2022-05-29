<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Episode;
use App\Models\Quote;
use Illuminate\Database\Seeder;

class QuoteSeeder extends Seeder
{
    protected $charactesPerEpisodeMin = 5;
    protected $charactesPerEpisodeMax = 15;

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
            $quoteCount = rand($this->charactesPerEpisodeMin, $this->charactesPerEpisodeMax);

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
