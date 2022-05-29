<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    protected $total = 100;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = Character::factory()
            ->count($this->total)
            ->create();
    }
}
