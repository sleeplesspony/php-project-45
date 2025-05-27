<?php

namespace BrainGames\Games\GCD;

use BrainGames\Engine;

function startGame()
{
    $game = createGame();
    Engine\start($game);
}

function createGame()
{

    return [
        "task" => "Find the greatest common divisor of given numbers.",
        "rounds" => getRounds()
    ];
}

function getRounds()
{
    $rounds = [];

    for ($i = 1; $i <= Engine\MAX_QUESTIONS_NUM; $i++) {
        $num1 = random_int(1, Engine\MAX_RAND);
        $num2 = random_int(1, Engine\MAX_RAND);

        $rounds[] = [
            "question" => "{$num1} {$num2}",
            "answer" => strval(getAnswer($num1, $num2))
        ];
    }

    return $rounds;
}

function getAnswer($num1, $num2)
{
    $num1 = abs($num1);
    $num2 = abs($num2);

    while ($num2 > 0) {
        $remain = $num1 % $num2;
        $num1 = $num2;
        $num2 = $remain;
    }

    return $num1;
}
