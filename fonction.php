<?php
require 'vendor/autoload.php';

use Yoni\DonjonEtJambon\Character;

function writeText($value) {
 echo('<br>');
 echo($value);
 echo('<br>');
}
 $Hero = new Character($playerName,200,15,0);
 $Hero->addSoin();
 dump($Hero);
 $SmallMinion = new Character("Small-Minion",10,10,0);
 dump($SmallMinion);
 $MediumMinion = new Character("Medium-Minion",30,30,0);
 dump($MediumMinion);
 $BigMinion = new Character("Big-Minion",100,100,0);
 dump($BigMinion);

 $Hero->DoDamage($SmallMinion);

 if($SmallMinion->Death()){
    echo("mort");
 }
?>


 