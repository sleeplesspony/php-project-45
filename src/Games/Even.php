<?php

namespace BrainGames\Games\Even;

use BrainGames\Engine;

function startGame()
{
    $game = createGame();
    Engine\start($game);
}

function createGame()
{

    $game = [
        "task" => 'Answer "yes" if the number is even, otherwise answer "no".',
        "rounds" => getRounds()
    ];

    return $game;
}

function getRounds()
{
    $rounds = [];

    for ($i = 1; $i <= Engine\MAX_QUESTIONS_NUM; $i++) {
        $num = random_int(1, Engine\MAX_RAND);

        $rounds[] = [
            "question" => "{$num}",
            "answer" => strval(getAnswer($num))
        ];
    }

    return $rounds;
}

function getAnswer($num)
{
    return isEven($num) ? "yes" : "no";
}

function isEven($num)
{
    return $num % 2 === 0;
}
