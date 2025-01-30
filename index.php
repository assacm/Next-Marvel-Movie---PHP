<?php 

// phpinfo();
#posible despliegue en zeabur

declare(strict_types = 1); //para activar la validación de tipos de datos, evitar conversiones automáticas. Debe activarse por cada archivo.

//utilizar require para archivos importantes para el funcionamiento de la aplicación
//utilizar include cuando son archivos secundarios
//require 'functions.php';
//include 'functions.php';

require_once 'const.php';
require_once 'functions.php';

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]); 

?>

<?php render_template("head", $data);  ?>
<?php render_template('styles'); ?>
<?php render_template('main',  array_merge($data, ["until_message" => $until_message])); ?>
 