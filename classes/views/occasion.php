<?php
$carID = $_GET['id'];
require_once "includes/occasionFunctions.php";
$photoNrs = initCarPhotos($maxFileNr, $maxPhotoCount, $carID, $fileFormat);
?>

<main class="occasionPagina">
    <p class="titel" id="titel"><?= $car['Gegevens']['Merk'] . " " . $car['Gegevens']['Model'] ?></p>
    <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
        <ol class="carousel-indicators">
            <?php $autoNr = 0;
            foreach ($photoNrs as $photo) { ?>
                <li data-target="#carouselExampleIndicators"
                    data-slide-to="<?= $autoNr ?>" <?php if ($autoNr == 0) { echo 'class="active"'; } ?>
                    style="background-color: var(--white-color); background-image: url('./images/Occasions/aangeboden occasions/<?= $carID + 1 ?>/<?= $photo ?>.<?= $fileFormat ?>')">
                </li>
                <?php
                $autoNr++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php $firstItem = true;
            foreach ($photoNrs as $photo) { ?>
                <div class="carousel-item <?php if ($firstItem): echo 'active';
                    $firstItem = false; endif; ?>">
                    <img class="d-block w-100 carousel-photos"
                         src="./images/Occasions/aangeboden occasions/<?= $carID + 1 ?>/<?= $photo ?>.<?= $fileFormat ?>"
                         alt="Foto 1">
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- END CAROUSEL -->
    <div class="occasion-informatie-container">
        <?php foreach ($car as $category => $categoryName) { ?>
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 informatie-block-container">
                <div class="informatie-block">
                    <h3 class="informatie-titel"><?= $category ?></h3>
                    <?php foreach ($categoryName as $subCategory => $categoryAnswer) { ?>
                        <div class="rij d-flex flex-row justify-content-between">
                            <dt><?= $subCategory ?></dt>
                            <dd><?= $categoryAnswer ?></dd>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <div class="col-12 col-md-6 col-lg-6 col-xl-4 informatie-block-container">
            <div class="informatie-block exception">
                <h3 class="informatie-titel">Bent u geïnteresseerd?</h3>
                <a href="contact.php"><p>Bekijk contactmogelijkheden.</p></a>
                <a href="https://wa.me/+31612682238/?text=Hallo, ik ben geïnteresseerd in een occasion. Het betreft de <?= $car['Gegevens']['Model'] ?>."
                   target="_blank"><p>Of stuur ons een bericht op WhatsApp.</p></a>
            </div>
        </div>
    </div>
</main>


