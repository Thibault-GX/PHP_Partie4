<?php
$exerciseNb = 7;
include '../header.php';

function identifyYourself(string $gender,int $age)
{
  if ($gender == 'homme' && $age >= 18)
  {
    echo 'Vous êtes un homme et vous êtes majeur.';
  }
  elseif ($gender == 'homme' && $age < 18)
  {
    echo 'Vous êtes un homme et vous êtes mineur.';
  }
  elseif ($gender == 'femme' && $age >= 18)
  {
    echo 'Vous êtes une femme et vous êtes majeur.';
  }
  elseif ($gender == 'femme' && $age < 18)
  {
    echo 'Vous êtes une femme et vous êtes mineur.';
  }
  else {
    {
      echo 'PTDR, t\'es ki ?';
    }
  }
}

identifyYourself('homme',27);

include '../footer.php';
