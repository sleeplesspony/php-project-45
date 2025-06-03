<?php

namespace BrainGames\Games\Calc;

use BrainGames\Engine;

function startGame(): void
{
    $game = createGame();
    Engine\start($game);
}

function createGame(): array
{

    return [
        "task" => "What is the result of the expression?",
        "rounds" => getRounds()
    ];
}

function getRounds(): array
{
    $rounds = [];
    $operations = array("+", "-", "*");

    for ($i = 1; $i <= Engine\QUESTIONS_COUNT; $i++) {
        $num1 = random_int(1, Engine\MAX_RAND);
        $num2 = random_int(1, Engine\MAX_RAND);
        $operation = $operations[array_rand($operations)];

        $rounds[] = [
            "question" => "{$num1} {$operation} {$num2}",
            "answer" => strval(getAnswer($operation, $num1, $num2))
        ];
    }

    return $rounds;
}

function getAnswer(string $operation, int $num1, int $num2): int
{
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new \UnexpectedValueException("Unknown operation: {$operation}");
    }
}
