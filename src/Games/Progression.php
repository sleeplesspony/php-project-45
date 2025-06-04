<?php

namespace BrainGames\Games\Progression;

use BrainGames\Engine;

const PROGRESSION_LENGTH = 10;

function startGame(): void
{
    $game = createGame();
    Engine\start($game);
}

function createGame(): array
{
    return [
        "task" => "What number is missing in the progression?",
        "rounds" => getRounds()
    ];
}

function getRounds(): array
{
    $rounds = [];

    for ($i = 1; $i <= Engine\QUESTIONS_COUNT; $i++) {
        $progression = getProgression();
        $missingIndex = random_int(0, PROGRESSION_LENGTH - 1);

        $rounds[] = [
            "question" => getQuestion($progression, $missingIndex),
            "answer" => "{$progression[$missingIndex]}"
        ];
    }

    return $rounds;
}

function getProgression(): array
{
    $progression = [];
    $step = random_int(1, 10);
    $startElement = random_int(1, 100);
    $progression[] = $startElement;

    for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
        $progression[] = $startElement + $i * $step;
    }

    return $progression;
}

function getQuestion(array $progression, int $missingIndex): string
{
    $progression[$missingIndex] = "..";
    return implode(" ", $progression);
}
