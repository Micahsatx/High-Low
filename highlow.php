<?php

// get a random number at set it equal to the variable $numberUserIsGuessing
$numberUserIsGuessing = mt_rand( 1 , 100 );

// start the game by telling user what to do
echo "Hey n00b, im thinking of a number between 1 and 100, guess what it is to earn some respect\n";

// variable for users input is set to usersGuess variable
$usersGuess = trim(fgets(STDIN));

// do the first part of this do/while as long as it is lower or higher than random number
do{    
    if ($usersGuess < $numberUserIsGuessing){
        echo "Wrong, guess HIGHER.\n";
        $usersGuess = trim(fgets(STDIN));
    } else {
        echo "Wrong, guess LOWER.\n";
        $usersGuess = trim(fgets(STDIN));
    }
// do the top part as long as the below statement is NOT TRUE! 
} while ($numberUserIsGuessing != $usersGuess);
// user finally guessed the correct number and won the game
echo "GOOD GUESS EINSTIEN!  1 in 100 were pretty good odds though, just saying\n";