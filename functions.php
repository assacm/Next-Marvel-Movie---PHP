<?php

declare(strict_types = 1);

function render_template(string $template, array $data = []){

    extract($data); //extra todos los métodos de un array asociativo en variables
    require "templates/$template.php";

}

//un php, una función no puede acceder a variables globales, en caso de ser necesario
//utilizar global $nombreVariable
function get_data(string $url){
    $result  = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $days): string{

    return match(true){
        $days === 0 => "¡Hoy es el estreno!",
        $days === 1 => "Falta 1 día",
        default     => "Faltan $days días"
    };
}





?>