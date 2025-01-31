<?php 

    //variables
    $name = "Alma";
    $isDev = true;
    $age = 24;
    $newAge = $age + '1';

    //constantes, existen dos tipos
    //Se recomienda declarar constantes globales en un archivo en especifico con init const o algo así
    //porque se pueden duplicar, existe una advertencia, pero esta se puede ignorar
    define('UNA_VARIABLE', "valor");

    //Las constantes const o locales,  no requieren el $
    const VARIABLE_LOCAL = 'asdaad';
    //las constantes no deben depender de valores en tiempo de ejecución, usar variable en ese otro caso.

    var_dump($name);
    var_dump($isDev);
    var_dump($age);
    var_dump($newAge);


    #Las comillas simples no aceptan interpolaci+on de cadenas
    $output = "Hola $name, con una edad de $age.";

    $isOld = $age > 40;

    if($isOld){
        echo "<h2> Tenga su mamisan</h2>";
    }
    elseif($isDev){ //también se puede un else if
        echo "<h2> Pues no viejo, pero si jodido.</h2>";
    }
    else{
        echo "<h2> No parece</h2>";
    }

    $outputAge = $isOld
     ? 'Oldie'
     : 'Newbie';
?>
    <!-- Tratar de separar la lógica del html todo lo posible-->
    <h2>Edad con ternaria: <?= $outputAge ?></h2>


    <!-- otra forma : -->
    <?php if ($isOld) : ?>
        <h2> Tenga su mamisan</h2>
    <?php elseif ($isDev) : ?>  <!-- elseif debe estar junto, separado provoca error de sintáxis -->
        <h2>  Pues no viejo, pero si jodido.</h2>
    <?php else : ?>
        <h2> No parece</h2>
    <?php endif; ?>
    
<h1>
    <?=  "la primera app de $name" ?><!-- <?php echo "hola mundo"; ?> -->
</h1>
<h2>Edad <?= $newAge ?></h2>

<?php 
    //match es mejor que switch
    $outputAgeV2 = match ($age){
        0, 1 , 2 => "Eres un bebé, $name",
        3,4,5,6,7,8,9,10 => "Eres un niño, $name",
        11,12,13,14,15,16,17,18 => "Eres un adolescente, $name",
        19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30 => "Eres un adulto joven, $name",
        default => "Eres un adulto, $name",

    };

    //código anterior mejorado evaluando expresiones
    $outputAgeV2 = match (true){
        $age < 3=> "Eres un bebé, $name",
        $age < 10 => "Eres un niño, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto joven, $name",
        default => "Eres un adulto, $name",

    };

?>
  <h2>Edad con match: <?= $outputAgeV2 ?></h2>


<h3>
    <?= "Hola " 
        . $name
        . ", <br> con una edad de "
        . $age 
        . " <script> alert('hols') </script>"

    ?>
</h3>
<h3> <?=  $output ?></h3>

<?php 

    $bestLanguages = ["PHP", "JavaScript", "Python"];
    $bestLanguages[3] = "Java";
    $bestLanguages[]="Typescript"; //Agrega a última posición


    $person = [
        "name" => "Alma",
        "age" => "24",
        "isDev" => true,
        "languages" => ["PHP", "Javascript", "Python"],    
    ];

    $person["name"] = "Julissa";
    $person["languages"][] = "Java";
?>

<ul>
    <?php foreach($bestLanguages as $key => $language) : ?>
        <li><?=  $key . ' '. $language ?></li>
    <?php endforeach; ?>

</ul>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>