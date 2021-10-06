<?php

//Create an array of three options of the game (rock, paper, scissors)
$game = array('rock', 'paper', 'scissors');

//Create the variables playerA and Player B and Randomly assing a value between 0 and 2
// because we are going to use the id of the array game to define what option was selected
$playerA = rand(0, 2);
$playerB = rand(0, 2);

// Thanks to the post of Jermy Grifski  (https://therenegadecoder.com/code/rock-paper-scissors-using-modular-arithmetic/) and Susan for publish this link in our forum.
// I decide to follow the approch of use Operator Module for my game. In this way we simplify and reduce the if conditions to 3.
// Taking the selection of Playe A minus selection of Playber B and apply  the Operator Module "%" with the number 3 we can obtained the following module number:
// 0,1,2,-1,-2
// where  0 = Tie,  1 and -2  player A wins, 2 and -1 Player B wins.
$gameModCalculation = ($playerA - $playerB) % 3;

// Check to see how the play happenned
$result = gameCheck($gameModCalculation);

// This function takes the $gameModCalculation to determine who is the winner
function gameCheck($gameModCalculation)
{
     if ($gameModCalculation == 0) {
          return "Tie";
     } else if ($gameModCalculation == 1 || $gameModCalculation == -2) {
          return "Player A Win ";
     } else if ($gameModCalculation == 2 || $gameModCalculation == -1) {
          return "Player B Win";
     }
}

require 'index-view.php';
