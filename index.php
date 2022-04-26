<?php 

/** Comments statement on php */


// varibale store valu - single line comment in php
#expression express values 

/*

Statement are actions which are ended 
with semi-colon in PHP - multiple line comment statement

*/

/** variable  on php */

$game_name = 'Mass Effect 3'; // string data type
//$release_year = 2013; // integer data type
$cost_now = 11.95; // float data type
$awesome = true; // boolean data type

/** constant  on php */

const BR = '<br />';
define('RELEASE_YEAR', 2013);

echo "The game $game_name was released in ".RELEASE_YEAR." and it now costs $cost_now at amazon.com " .BR;

$num = '100.77';
var_dump(+$num); // function of find out what the data types are in PHP

echo BR;

/** array  on php */

// numeric array

                // keys: 0 = rpg, keys:1 = action
$game_genres = array('rpg', array('action','puzzle','strategy'), 'mmrope','fps');

echo $game_genres[1][0].BR;
echo $game_genres[1][1].BR;
echo $game_genres[1][2].BR;
echo $game_genres[2].BR;


pre_r($game_genres);

// assosiative array in php

$years = array('Starcraft' => 1998, 'The Whicher' => 2009, 'THe Mass Effect 3' => RELEASE_YEAR, 'Diablo' => 1996);


pre_r($years);


$num = add(100,100); // $num = 200
echo 'The addition value is: ' .$num.BR;

// function in php

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function add($x, $y){
    return $x + $y;
}

// conditional statement

if (18 < 21 ){
    echo " It's True! ". BR;
}
if(18 > 21 ){
    echo " It's True! ". BR;
}
else{ // if false
    echo " It's False ". BR;
}

if ( RELEASE_YEAR > 2010 ){ //true
    echo "The game was released after the year 2010".BR;
}
elseif( RELEASE_YEAR == 2000) {
    echo "The game was released after the year 2000".BR;
}
elseif( RELEASE_YEAR < 2010) {
    echo "The game was released after the year 2010".BR;
}
else{
    echo "The game was released in 2010".BR;
}

// switch statment

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!".BR;
    break;
  case "blue":
    echo "Your favorite color is blue!".BR;
    break;
  case "green":
    echo "Your favorite color is green!".BR;
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!".BR;
}

/** loop  on php */

for ($key=0; $key < count($game_genres); $key++) { 
    if(is_array($game_genres[$key])){
        for ($key2=0; $key2 < count($game_genres[$key]); $key2++) { 
            echo $game_genres[$key][$key2].BR;
        }
    }
    else{
        echo $game_genres[$key].BR;
    }
}

foreach ($years as $game => $year ){ // $game = key, $year = value
    echo "$game was released in $year".BR;
}

$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);