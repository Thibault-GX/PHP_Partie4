<?php
$exerciseNb = 5;
include '../header.php';

function stringAndInt(string $string, int $int)
{
  echo $string.' et '.$int.'.';
}

stringAndInt('J\'ai choisi le nombre entier',23);

include '../footer.php';
