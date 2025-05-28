<?php

namespace BrainGames\Games\Even;

use BrainGames\Engine;

function startGame(): void
{
    $game = createGame();
    Engine\start($game);
}

function createGame(): array
{

    return [
        "task" => 'Answer "yes" if the number is even, otherwise answer "no".',
        "rounds" => getRounds()
    ];
}

function getRounds(): array
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

function getAnswer(int $num): string
{
    return isEven($num) ? "yes" : "no";
}

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
