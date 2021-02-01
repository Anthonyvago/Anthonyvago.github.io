<?php
require_once 'includes/googleReviews.php';
require_once 'includes/homepageFunctions.php';
$gemRating = calcAvarageRating($googleReviews);
//echo '<pre>'; print_r($arr); echo '</pre>';
?>

<main class="hoofdpagina">
    <div class="background-image">
        <div class="text text-center">
            <img src="images/logo.png" alt="Saab Service Rhenen logo" class="logo">
            <p class="caption">Gespecialiseerd in alle Saab-modellen</p>
            <a href="#Introductie">
                <svg width="50px" viewBox="0 0 16 16" class="arrow bi bi-arrow-down-circle" fill="#fff"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path fill-rule="evenodd"
                          d="M4.646 7.646a.5.5 0 0 1 .708 0L8 10.293l2.646-2.647a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M8 4.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="info-container row" id="Introductie">
        <?php foreach ($shortIntroductions as $shortIntroduction) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-titel"><?= $shortIntroduction[0] ?></h2>
                        <hr>
                        <p class="card-text"><?= $shortIntroduction[1] ?></p>
                        <div class="button-container">
                            <a href="<?= $shortIntroduction[2] ?>.php" class="btn">Lees meer...</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="reviews-container">
        <div class="reviews-sub-container">
            <h1 class="master-title text-center">Ervaringen</h1>
            <a href="https://g.page/saab-service-rhenen/review?gm" class="geef-review-button" target="_blank">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                    <path fill-rule="evenodd"
                          d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                </svg>
                Review achterlaten
            </a>
            <div class="gemiddelde-rating-container col-12">
                <div class="top">
                    <div class="google-logo">
                        <img src="./images/Hoofdpagina/google-logo.svg" class="google-logo" alt="Google logo">
                    </div>
                    <div class="gemiddelde-rating-text">
                        <p>Gemiddelde beoordeling</p>
                    </div>
                </div>
                <div class="body">
                    <?php
                    echo '<p>' . number_format($gemRating, 1) . ' / 5.0</p>';
                    $newGemRating = round($gemRating * 2) / 2; /* Rondt af op halve getallen */
                    $starSize = 22;
                    for ($i = 0; $i < floor($newGemRating); $i++) { ?>
                        <svg width="<?= $starSize ?>px" height="<?= $starSize ?>px" viewBox="0 0 16 16"
                             class="bi bi-star-fill"
                             fill="rgb(18, 49, 100)" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    <?php }
                    if ($newGemRating - floor($newGemRating) == 0.5)
                        echo '<svg width="' . $starSize . 'px" height="' . $starSize . 'px" viewBox="0 0 16 16" class="bi bi-star-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.354 5.119L7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.519.519 0 0 1-.146.05c-.341.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.171-.403.59.59 0 0 1 .084-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027c.08 0 .16.018.232.056l3.686 1.894-.694-3.957a.564.564 0 0 1 .163-.505l2.906-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.002 2.223 8 2.226v9.8z"/>
                        </svg>';
                    echo '<a href="https://www.google.com/search?q=Saab+Service+Rhenen%2C+Tasveld+24%2C+3911+TN+Rhenen&oq=saab&aqs=chrome.2.69i60j69i59l4j69i60l3.6484j0j7&sourceid=chrome&ie=UTF-8#lrd=0x47c656ab94195555:0xce572cfdad3ec1b2,1,,," target="_blank"><p class="aantal-beoordelingen">Uit ' . count($googleReviews) . ' beoordelingen</p></a>';
                    ?>
                </div>
            </div>
            <div class="row">
                <?php foreach ($googleReviews as $googleReview) { ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="review">
                            <div class="row review-top">
                                <a href="https://www.google.com/maps/contrib/<?= $googleReview['accountId'] ?>/reviews"
                                   target="_blank" class="review-profielfotos"
                                   style="background-color: rgb(220, 220, 220); background-image: url('<?= $googleReview['pfUrl'] ?>');">
                                </a>
                                <div class="naam-en-sterren-container">
                                    <a href="https://www.google.com/maps/contrib/<?= $googleReview['accountId'] ?>/reviews"
                                       target="_blank"><?= $googleReview['name'] ?></a>
                                    <div class="row">
                                        <?php
                                        $nrOfMaxStars = 5;
                                        $drawStar = true;

                                        for ($starNr = 0; $starNr < $nrOfMaxStars; $starNr++) {
                                            if ($starNr >= $googleReview['stars'] && $drawStar == true) {
                                                $drawStar = false;
                                            }
                                            if ($drawStar) {
                                                echo '<svg width="19px" height="19px" viewBox="0 0 16 16" class="bi bi-star-fill"
                                                    fill="rgb(18, 49, 100)" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                    </svg>';
                                            } else {
                                                echo '<svg width="19px" height="19px" viewBox="0 0 16 16" class="bi bi-star"
                                                    fill="rgb(18, 49, 100)" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                    </svg>';
                                            }
                                        }
                                        echo '<a href="https://www.google.com/maps/contrib/' . $googleReview['accountId'] . '/reviews" class="aant-sterren" target="_blank">(' . $googleReview['stars'] . ')</a>'; ?>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($googleReview['positief'])) echo '<p class="positief-content"><b>Positief: </b>' . $googleReview['positief'] . '</p>'; ?>
                            <p class="review-content"><?php if (empty($googleReview['content'])) echo '<i>Deze gebruiker heeft geen review geschreven.</i>'; else echo $googleReview['content']; ?></p>
                            <?php if (isset($googleReview['images'])) { ?>
                                <div class="row review-image-container">
                                    <?php foreach ($googleReview['images'] as $image) { ?>
                                        <a href="<?= $image['imageLink'] ?>" target="_blank" class="review-images"
                                           style="background-color: var(--saab-color2); background-image: url('<?= $image['image'] ?>')"></a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <p class="datum text-right">
                                <?php
                                $timeDiffArr = getTimeDifference($googleReview['date']);
                                $timeDiffString = getStringToDisplay($timeDiffArr);
                                echo $timeDiffString;
                                ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <p class="text-center google-reviews-caption">Het kan voorkomen dat de tijdsaanduidingen niet
                precies overeen komen met die van Google. <a id="meerInformatieBtn">Meer informatie</a></p>
            <!-- BEGIN MODAL -->
            <div id="meerInformatieModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <p>Verschillende tijdsaanduidingen</p>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <p>De tijdsaanduidingen die u op deze pagina ziet, kunnen verschillen met die van Google haar
                            tijdsaanduidingen. Dit komt
                            doordat wij gebruik maken van een algoritme dat afrondt op maanden.</p>
                        <p>Google maakt gebruik van een algoritme dat pas een maand toevoegt als de maand is
                            afgelopen.</p>
                        <p style="margin-top: 20px">Voorbeeld: Een review is 3 maanden en 28 dagen geleden
                            geüpload.</p>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Google</td>
                                <td>3 maanden geleden</td>
                            </tr>
                            <tr>
                                <td>Saab Service Rhenen</td>
                                <td>4 maanden geleden</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- EINDE MODAL -->
            <a href="https://g.page/saab-service-rhenen/review?gm" class="geef-review-button2 text-center"
               target="_blank">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                    <path fill-rule="evenodd"
                          d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                </svg>
                Review achterlaten
            </a>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("meerInformatieModal");
        // Get the button that opens the modal
        var btn = document.getElementById("meerInformatieBtn");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal
        btn.onclick = function () {
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</main>