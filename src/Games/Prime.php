<?php

namespace BrainGames\Games\Prime;

use BrainGames\Engine;

function startGame(): void
{
    $game = createGame();
    Engine\start($game);
}

function createGame(): array
{

    return [
        "task" => 'Answer "yes" if given number is prime. Otherwise answer "no".',
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
    return isPrime($num) ? "yes" : "no";
}

function isPrime(int $num): bool
{
    if ($num < 2) {
        return false;
    }

    if ($num === 2) {
        return true;
    }

    if ($num % 2 === 0) {
        return false;
    }


    for ($i = 3; $i * $i <= $num; $i += 2) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
