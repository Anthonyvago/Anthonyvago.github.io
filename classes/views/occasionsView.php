<?php
$fileFormat = 'png';
$categoriesToShow = ['Merk', 'Model', 'Bouwjaar', 'Kilometerstand', 'Transmissie', 'Brandstof'];
?>

<main class="occasionsPagina">
    <?= frontContainer($title) ?> <!-- functions.php -->
    <p>Dit is de occasionspagina.<br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Duis semper libero nec erat molestie, sit amet pretium libero efficitur.
        Aliquam erat volutpat. Sed sit amet nulla nec lectus consectetur dapibus.
        Aliquam auctor massa sit amet lorem ultrices, nec pretium tellus ullamcorper.
        Nam ac arcu at nisl elementum dictum. Nam convallis dictum velit.</p>
    </div> <!-- Einde text container -->

    <div class="occasionspagina-container" id="occasionspagina-container">
        <div class="occasions-container row">
            <?php
            $autoNr = 1;
            foreach ($allCarsInfo as $key => $car) { ?>
                <div class="occasion-card-container col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="occasion-card">
                        <a href="occasions.php?id=<?= $key ?>" class="car-image-link">
                            <div class="car-image-container">
                                <div class="car-image"
                                     style='background-image: url("./images/Occasions/aangeboden occasions/Auto <?= $autoNr ?>/thumbnail.<?= $fileFormat ?>")'></div>
                            </div>
                        </a>
                        <div class="occasion-content">
                            <p class="occasion-auto-titel"><?= $car['Gegevens']['Merk'] . ' ' . $car['Gegevens']['Model'] ?></p>
                            <d1 class="occasion-informatie">
                                <?php
                                foreach ($car as $category => $categoryName) {
                                    foreach ($categoryName as $subCategory => $categoryAnswer)
                                        if (in_array($subCategory, $categoriesToShow)) : ?>
                                            <div class="occasion-informatie-container">
                                                <dt><?= $subCategory ?></dt>
                                                <dd><?= $categoryAnswer ?></dd>
                                            </div>
                                        <?php endif; ?>
                                <?php } ?>
                            </d1>
                        </div>
                        <a href="occasions.php?id=<?= $key ?>" class="btn text-center">Meer informatie</a>
                    </div>
                </div>
                <?php
                $autoNr++;
            } ?>
        </div>
    </div>
</main>
