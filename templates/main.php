<main>
    <!-- <pre style="font-size:8px; overflow: scroll; height: 250px;">
        <?php 
            //var_dump($data); 
        ?>
    </pre> -->
    <div class="container">
        <section>
            <h2>La próxima película de Marvel</h2>
            <img src="<?= $poster_url; ?>" width="300" style="border-radius:16px;" alt="Poster de <?= $title; ?>">
        </section>
        <hgroup>
            <h2><?= $title; ?></h2>
            <h3>Fecha de estreno <?= $release_date; ?></h3>
            <h6> <?= $until_message ?> </h6>
            <p>
                <?= $overview; ?>
            </p>
            <p>
                Siguiente producción: <?= $following_production["title"] ?>
            </p>
        </hgroup>
    </div>
    
</main>    