<?php
namespace Yoni\DonjonEtJambon;


class Character {
    public $health;
    public $attack;
    public $name;
    public $armor;
    public $damageMitigation;

   public function __construct($name,$health,$attack,$armor)
    {
        $this->name = $name;
        $this->health = $health;
        $this->attack = $attack;
        $this->armor = $armor;
    }

    // potion de soin + 50hp
    public function addSoin()
    {
        $this->health = $this->health + 50;
    }

    // armure +20
    public function addArmor()
    {
        $this->armor = $this->armor + 50;
    } 
    
    
    //attack perso vs perso 
    public function DoDamage($target){
       $damageMitigation = ($this->attack -= $target->armor);
        $target->health -= $damageMitigation;
        dump($target);
    }
}
