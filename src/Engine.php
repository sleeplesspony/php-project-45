<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_QUESTIONS_NUM = 3;
const MAX_RAND = 100;

function start($game)
{

    line("Welcome to the Brain Game!");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    if (isset($game["task"])) {
        line("%s", $game["task"]);
    }

    foreach ($game["rounds"] as $round) {
        line("Question: %s", $round["question"]);
        $userAnswer = prompt('Your answer');
        if ($userAnswer === $round["answer"]) {
            line('Correct!');
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $userAnswer, $round["answer"]);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
