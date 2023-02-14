<?php
require 'vendor/autoload.php';

use Yoni\DonjonEtJambon\Character;

 $Hero = new Character("hero",200,15,0);
 $Hero->addSoin();
 dump($Hero);

 $SmallMinion = new Character("Small-Minion",10,10,20);
 dump($SmallMinion);
 $MediumMinion = new Character("Medium-Minion",30,30,0);
 dump($MediumMinion);
 $BigMinion = new Character("Big-Minion",100,100,0);
 dump($BigMinion);

 $Hero->DoDamage($SmallMinion);
 