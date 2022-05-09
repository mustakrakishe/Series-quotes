<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = Character::factory()
            ->hasQuotes(rand(
                env('SEEDER_QUOTE_PER_CHARACTER_MIN'),
                env('SEEDER_QUOTE_PER_CHARACTER_MAX')
            ))
            ->count(5)
            ->create();
    }
}
