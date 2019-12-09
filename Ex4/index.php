<?php
$exerciseNb = 4;
include '../header.php';

function numberCompare($firstNumber,$secondNumber)
{
  if ($firstNumber > $secondNumber)
  {
    echo $firstNumber.' est plus grand que '.$secondNumber.'.';
  }
  elseif ($firstNumber == $secondNumber)
  {
    echo 'Les deux nombres sont égaux.';
  }
  else {
    echo $firstNumber.' est plus petit que '.$secondNumber.'.';
  }
}

numberCompare(15,16);

include '../footer.php';
