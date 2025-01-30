<?php 

// phpinfo();

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

//Indicar que queremos recibir el resultado de la petición y no mostrarla  en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

/*
Ejecutar la petición 
y guardamos el resultado
*/ 

$result = curl_exec($ch);

//Una alternativa sería utilizar file_get_contents 
//$result = file_get_contents(API_URL); //Si solo quieres hacer un get de una api
$data = json_decode($result,true);

curl_close($ch);

// var_dump($data);

?>

<head>
    <meta charset="UTF-8" />
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <style>
        /* body{
            display: grid;
            place-content: center;
            max-width: 100vw;
        } */


        .container{
            width:100vw; 
            padding:1rem; 
            display:flex; 
            flex-direction:column; 
            align-items:center;
        }    

        .container > * {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

    </style>
</head>

<main>
    <pre style="font-size:8px; overflow: scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre>
    <div class="container">
        <section>
            <h2>La próxima película de Marvel</h2>
            <img src="<?= $data["poster_url"]; ?>" width="300" style="border-radius:16px;" alt="Poster de <?= $data["title"]; ?>">
        </section>
        <hgroup>
            <h2><?= $data["title"]; ?></h2>
            <h3>Fecha de estreno <?= $data["release_date"]; ?></h3>
            <h6> Estreno en <?= $data["days_until"]; ?> días.</h6>
            <p>
                <?= $data["overview"]; ?>
            </p>
            <p>
                Siguiente producción: <?= $data["following_production"]["title"] ?>
            </p>
        </hgroup>
    </div>
    
</main>     