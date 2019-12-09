<?php
$exerciseNb = 6;
include '../header.php';

function helloIKnowYou(string $lastname,string $firstname,int $age)
{
  echo 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';
}

helloIKnowYou('Grimoux','Thibault',27);
include '../footer.php';
