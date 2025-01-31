<?php


class SuperHero{

  //Propiedades y métodos
    public $name;
    public $powers;
    public $planet;
    
    public function __construct($name, $powers, $planet) {
        $this->name = $name;
        $this->powers = $powers;
        $this->planet = $planet;
    }

    
    public function attack(){
        return "¡$this->name ataca con sus poderes!";
    }

    public function description(){
        return "$this->name es un superhéroe nivel que viene de 
         $this->planet y tiene los siguientes poderes:
         $this->powers 
        ";
    }
}


$hero = new SuperHero("Batman","inteligencia, fuerza, tenología","Gotham");
echo $hero->description();

$hero2 = new SuperHero("Superman","Superfuerza, super calzones rojos, rayos láser","Krypton");
echo $hero2->description();