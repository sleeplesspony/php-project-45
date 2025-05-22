<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

const MAX_QUESTIONS_NUM = 3;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 1; $i <= MAX_QUESTIONS_NUM; $i++) {
        $num = rand(1, 5000);
        line("Question: %d", $num);
        $answer = prompt('Your answer');
        $correctAnswer = getCorrectAnswer($num);
        if ($correctAnswer === strtolower($answer)) {
            line('Correct!');
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}

function isEven($num)
{
    return $num % 2 === 0;
}

function getCorrectAnswer($num)
{
    return isEven($num) ? 'yes' : 'no';
}
