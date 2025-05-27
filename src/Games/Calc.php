<?php

namespace BrainGames\Games\Calc;

use BrainGames\Engine;

function startGame()
{
    $game = createGame();
    Engine\start($game);
}

function createGame()
{

    $game = [
        "task" => "What is the result of the expression?",
        "rounds" => getRounds()
    ];

    return $game;
}

function getRounds()
{
    $rounds = [];
    $operations = array("+", "-", "*");

    for ($i = 1; $i <= Engine\MAX_QUESTIONS_NUM; $i++) {
        $num1 = rand(1, Engine\MAX_RAND);
        $num2 = rand(1, Engine\MAX_RAND);
        $operation = $operations[array_rand($operations)];

        $rounds[] = [
            "question" => "{$num1} {$operation} {$num2}",
            "answer" => strval(getAnswer($operation, $num1, $num2))
        ];
    }

    return $rounds;
}

function getAnswer($operation, $num1, $num2)
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
    }
}
