<?php
$exerciseNb = 3;
include '../header.php';

$stringOne = 'Est-ce que ça concatène ?';
$stringTwo = 'Sans doute.';
function stringFusion($stringOne,$stringTwo)
{
  echo $stringOne.' '.$stringTwo;
}

stringFusion($stringOne,$stringTwo);

include '../footer.php';
