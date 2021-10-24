<?php

session_start();

$choice = (int)$_POST['choice'];

#Create an array of three options of the game (rock, paper, scissors)
$game = array('rock', 'paper', 'scissors');

#Create the variable for computer and Randomly assing a value between 0 and 2
$computer = rand(0, 2);

# Verify who is the winner
$winner = gameCheck($choice, $computer);

# This function takes the computer and player choices and define who is the winner.
# Solving RPS using a math formula
# Original source: https://therenegadecoder.com/code/rock-paper-scissors-using-modular-arithmetic/
function gameCheck($playerA, $playerB)
{
    if ($playerA == $playerB) {
        return 'Tie';
    } elseif (($playerA + 1) % 3 == $playerB) {
        return 'Computer is the winner';
    } else {
        return 'You are the winner';
    }
}

$_SESSION['results'] = [
    'winner' => $winner,
    'computer' => $computer,
    'choice' => $choice,
    'game' => $game
];

header('Location: index.php');
