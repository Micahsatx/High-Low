<?php

$numberUserIsGuessing = mt_rand( 1 , 100 );
    echo $numberUserIsGuessing . "\n";

echo "Hey n00b, im thinking of a number between 1 and 100, guess what it is to earn some respect\n";

$usersGuess = trim(fgets(STDIN));
    echo $usersGuess . PHP_EOL;


do{    
    if ($usersGuess < $numberUserIsGuessing){
        echo "Wrong, guess HIGHER.\n";
        $usersGuess = trim(fgets(STDIN));
    } else {
        echo "Wrong, guess LOWER.\n";
        $usersGuess = trim(fgets(STDIN));
    }
} while ($numberUserIsGuessing != $usersGuess);
echo "GOOD GUESS EINSTIEN!  1 in 100 were pretty good odds though, just saying\n";