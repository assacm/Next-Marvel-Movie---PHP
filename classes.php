<?php

declare(strict_types =1);

class SuperHero{

    //promoted properties PHP 8:
    public function __construct(
        readonly public string $name, //no se puede modificar, requiere especificar el tipo de dato
        public array $powers, 
        public $planet
    ){}

    public function show_all(){
        return get_object_vars($this);
    }

    public function attack(){
        return "¡$this->name ataca con sus poderes!";
    }

    public function description(){

        $powers = implode(",", $this->powers);
        return "$this->name es un superhéroe nivel que viene de 
         $this->planet y tiene los siguientes poderes:
         $powers 
        ";
    }

    public static function random(){
        $names =["Thor","Spiderman", "Wolverine", "Ironman", "Hulk"];

        $powers =[
            ["Superfuerza", "Volar", "Rayos Láser"],
            ["Superfuerza", "Super agilidad", "Telarañas"],
            ["Regeneración", "Superfuerza", "Garras de adamantium"],
            ["Superfuerza", "Volar", "Rayos láser"],
            ["Superfuerza", "Super agilidad", "Cambio de tamaño"]

        ];

        $planets = ["Asgard", "HulkWorld", "Tierra", "krypton"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)]; //array_rand retorna una llave random de un array
   
        echo "El superhéroe elegido es $name, que viene de $planet y tiene los siguientes poderes: " . implode(",", $power);
    }

    public static function random_hero(){
        $names =["Thor","Spiderman", "Wolverine", "Ironman", "Hulk"];

        $powers =[
            ["Superfuerza", "Volar", "Rayos Láser"],
            ["Superfuerza", "Super agilidad", "Telarañas"],
            ["Regeneración", "Superfuerza", "Garras de adamantium"],
            ["Superfuerza", "Volar", "Rayos láser"],
            ["Superfuerza", "Super agilidad", "Cambio de tamaño"]

        ];

        $planets = ["Asgard", "HulkWorld", "Tierra", "krypton"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)]; //array_rand retorna una llave random de un array
   
        return new self($name, $power, $planet);
    }

}

$hero = new SuperHero("Batman",["inteligencia", "fuerza", "tenología"],"Gotham");
echo $hero->description();

$hero2 = new SuperHero("Superman",["Superfuerza", "super calzones rojos", "rayos láser"],"Krypton");
echo $hero2->description();

var_dump($hero->show_all());

SuperHero::random(); // se utiliza :: para métodos estáticos.

$rhero = SuperHero::random_hero();
$rhero->description();