# Brain Games (php-project-45)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=sleeplesspony_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=sleeplesspony_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=sleeplesspony_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=sleeplesspony_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=sleeplesspony_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=sleeplesspony_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=sleeplesspony_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=sleeplesspony_php-project-45)
### Hexlet tests and linter status:
[![Actions Status](https://github.com/sleeplesspony/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/sleeplesspony/php-project-45/actions)

## About

**Brain Games** is a collection of five console-based games. Each game presents you with questions that you need to answer correctly. The goal is to provide three correct answers in a row to win the game. A single incorrect answer ends the game, prompting you to start over.

#### The games included

* **Even Number (brain-even):** Determine if a given number is even.
* **Calculator (brain-calc):** Solve arithmetic expressions.
* **Greatest Common Divisor (brain-gcd):** Find the greatest common divisor of two numbers.
* **Progression (brain-progression):** Find the missing numbers in a numerical sequence.
* **Prime Number (brain-prime):** Identify if a given number is prime.

## Prerequisites

* Linux, Macos, WSL
* PHP >=8.2
* Make
* Git
* Composer

## Setup

Setup [SSH](https://docs.github.com/en/authentication/connecting-to-github-with-ssh) before clone:

```bash
git clone git@github.com:sleeplesspony/php-project-45.git
cd php-project-45

make install
```

## Start game

To start game use make command and name of the desired game.

```bash
make brain-even
```

### Demo

See Brain Games in action

#### Even Number:
https://asciinema.org/a/fOAxvkQOsw7xASWHel61VVgPb

#### Calculator:
https://asciinema.org/a/OMe0QSOwH9j4TxM62tEOkbd5z

#### Greatest Common Divisor
https://asciinema.org/a/341EADYccBvx1Lv4euW3oKINm

#### Progression
https://asciinema.org/a/ubWGv3YSCNHj3ZUcm5vTr4tmI

#### Prime Number
https://asciinema.org/a/soQiY00aWoxzNcKlXr9QmZtrL