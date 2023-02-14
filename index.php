<?php
require 'vendor/autoload.php';

use Yoni\DonjonEtJambon\Character;

 $Hero = new Character("hero",200,15);
 dump($Hero);

 $SmallMinion = new Character("Small-Minion",10,10);
 dump($SmallMinion);
 $MediumMinion = new Character("Medium-Minion",30,30);
 dump($MediumMinion);
 $BigMinion = new Character("Big-Minion",100,100);
 dump($BigMinion);

 $Hero->DoDamage($SmallMinion);
 