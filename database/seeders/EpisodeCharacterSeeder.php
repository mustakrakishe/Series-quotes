<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeCharacterSeeder extends Seeder
{
    protected $quotesPerCharacterMin = 3;
    protected $quotesPerCharacterMax = 7;

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
            $characterCount = rand($this->quotesPerCharacterMin, $this->quotesPerCharacterMax);

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
