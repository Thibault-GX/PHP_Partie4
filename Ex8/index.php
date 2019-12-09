<?php
$exerciseNb = 8;
include '../header.php';

$firstNumber = 1;
$secondNumber = 2;
$thirdNumber = 3;

function addThreeNumbers(int $firstNumber,int $secondNumber,int $thirdNumber)
{
  $result = $firstNumber + $secondNumber + $thirdNumber;
  echo 'L\'addition de '.$firstNumber.', de '.$secondNumber.' et de '.$thirdNumber.' vaut '.$result.'.';
}

addThreeNumbers(5,9,8);

include '../footer.php';
