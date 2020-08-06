<?php
require_once('pokemon.php');
require_once('move.php');

$moves1[] = new Move("たいあたり", 35);
$moves1[] = new Move("でんきショック", 40);
$pikachu = new Pokemon("ピカチュウ", 24, 60, 50, $moves1);
$moves2[] = new Move("たいあたり", 35);
$moves2[] = new Move("しっぽをふる", 0);
$koratta = new Pokemon("コラッタ", 11, 20, 10, $moves2);

var_dump($koratta);
$pikachu->attack($koratta, 1);
var_dump($koratta);
