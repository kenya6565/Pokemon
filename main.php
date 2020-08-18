<?php
require_once('pokemon.php');
require_once('move.php');
require_once('type.php');


$moves1[] = new Move("たいあたり", 35, "でんき");
$moves1[] = new Move("でんきショック", 40, "でんき");

$pikachu = new Pokemon("ピカチュウ", 24, 60, 50, $moves1, $types1);
$moves2[] = new Move("たいあたり", 35,"ノーマル");
$moves2[] = new Move("しっぽをふる", 0, "ノーマル");
$types1[] = new Type("ほのお");
$types2[] = new Type("くさ");
$koratta = new Pokemon("コラッタ", 11, 20, 10, $moves2, $types2);


//var_dump($koratta);
$pikachu->attack($koratta,1);
var_dump($koratta);
// 