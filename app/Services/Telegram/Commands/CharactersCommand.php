<?php

namespace App\Services\Telegram\Commands;

use App\Repositories\CharacterRepository;
use Telegram\Bot\Commands\Command;

class CharactersCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "characters";

    /**
     * @var string Command Description
     */
    protected $description = "Show character list";

    /**
     * @inheritdoc
     */
    public function handle($arguments = '')
    {
        $this->replyWithMessage(['text' => 'Here are characters:']);
        
        $characters = (new CharacterRepository)->getAll(3, 1);

        foreach ($characters as $character) {
            $this->replyWithMessage([
                'text' => "photo: $character->img" . PHP_EOL
                    . "id: $character->id" . PHP_EOL
                    . "name: $character->name" . PHP_EOL
                    . "nick: $character->nickname" . PHP_EOL
                    . "birth: $character->birthday" . PHP_EOL
                    . "occups: $character->occopations" . PHP_EOL
                    . "portrayed: $character->portrayed" . PHP_EOL
            ]);
        }
    }
}