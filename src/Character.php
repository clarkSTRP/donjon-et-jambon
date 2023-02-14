<?php
namespace Yoni\DonjonEtJambon;


class Character {
    public $health;
    public $attack;
    public $name;

   public function __construct($name,$health,$attack)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
    }
    public function DoDamage($target){
        $target->health -= $this->attack;
        dump($target);  
    }
}
