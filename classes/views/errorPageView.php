<?php

?>

<main class="errorPagina">
    <div class="error-container">
        <img src="./images/logo.png" alt="Saab Service Rhenen logo" class="ssr-logo"/>
        <p class="error-title"><?= $messageTitle ?></p>
        <p class="error-title error-message"><?= $message ?></p>
        <p class="error-title error-message error-advise">Bekijk onze andere pagina's</p>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <a href="index.php">Hoofdpagina</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <a href="werkplaats.php">Werkplaats</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <a href="occasions.php">Occasions</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <a href="over-ons.php">Over ons</a>
                </div>
            </div>
        </div>
    </div>
</main>
