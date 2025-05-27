<?php

namespace BrainGames\Games\Progression;

use BrainGames\Engine;

const PROGRESSION_LENGTH = 10;

function startGame()
{
    $game = createGame();
    Engine\start($game);
}

function createGame()
{
    return [
        "task" => "What number is missing in the progression?",
        "rounds" => getRounds()
    ];
}

function getRounds()
{
    $rounds = [];

    for ($i = 1; $i <= Engine\MAX_QUESTIONS_NUM; $i++) {
        $progression = getProgression();
        $missingIndex = random_int(0, PROGRESSION_LENGTH - 1);

        $rounds[] = [
            "question" => getQuestion($progression, $missingIndex),
            "answer" => "{$progression[$missingIndex]}"
        ];
    }

    return $rounds;
}

function getProgression()
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

function getQuestion($progression, $missingIndex)
{
    $question = "";
    foreach ($progression as $key => $value) {
        if ($key != $missingIndex) {
            $question .= "{$value} ";
        } else {
            $question .= ".. ";
        }
    }

    return rtrim($question);
}
