<?php 

// phpinfo();
#posible despliegue en zeabur

const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data($url){
    $result  = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

$data = get_data(API_URL);

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