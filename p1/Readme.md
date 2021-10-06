# Project 1
+ By: Raul Pulido
+ URL: <http://e2p1.raulpulido.me>

## Game planning

+ _Create an array of three options, Rock, Paper and Scissors._
+ _Create the variables playerA and Player B and Randomly assing a value between 0 and 2_
+ _because we are going to use the id of the array game to define what option was selected_
+ _I decided to follow the approach of using the Operator Module to validate who wins. In this way, we simplify and reduce the "if" conditions to 3._
+ _The formula is:_
   
   _the selection of Playe A minus selection of Playber B and apply  the Operator Module "%" with the number 3._
    
  _($playerA - $playerB) % 3_
  
   we can obtained the following _module number:
  
  _0,1,2,-1,-2_
  
  _where  0 = Tie,  1 and -2  player A wins, 2 and -1 Player B wins._
+ _I create a function that receives the variable $gameModCalculation and evaluate who wins._
+ _Additional, we have in the folder 'images'  rock.jpeg, paper.jpeg, and scissors.jpeg and we display them according to the number assign to each player_


## Outside resources
Jermy Grifski  (https://therenegadecoder.com/code/rock-paper-scissors-using-modular-arithmetic/).


## Notes for instructor
The system randomly assigns each player's choice. Please refresh the page to play again.

