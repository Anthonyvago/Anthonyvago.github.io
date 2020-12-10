<?php
$allPagesArray = getPages();

function getFooterContactInfo($imageColor)
{
    $footerSecondRowInfo = [
        [
            'image' => '<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-house-door" fill=" ' . $imageColor . '"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        </svg>',
            'text' => '<a class="link" target="blank" href="https://www.google.com/maps/place/Saab+Service+Rhenen/@51.9729498,5.5296841,17z/data=!3m1!4b1!4m5!3m4!1s0x47c656ab94195555:0xce572cfdad3ec1b2!8m2!3d51.9729498!4d5.5318781">Tasveld 24, 3911TN Rhenen</a>'
        ],
        [
            'image' => '<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-telephone-forward" fill=" ' . $imageColor . '"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.47 16.47 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM12.646.646a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
                        </svg>',
            'text' => '<a class="link" href="callto:0318-519025">0318-519025</a>'
        ],
        [
            'image' => '<svg width="25px" height="25px" viewBox="0 0 16 16" class="bi bi-envelope" fill=" ' . $imageColor . '"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>',
            'text' => '<a class="link" href="mailto:albertvago@kpnmail.com" target="_blank">albertvago@kpnmail.com</a>'
        ]
    ];
    return $footerSecondRowInfo;
}

$imageColors = 'rgb(245, 245, 245)';
$footerSecondRowInfo = getFooterContactInfo($imageColors);
?>

<footer class="page-footer font-small blue pt-4" id="footer">
    <div class="container-fluid text-center text-md-left col-xl-8 offset-xl-2">
        <div class="row">
            <div class="col-md-5 mt-md-0 mt-3">
                <img src="./images/logo.png" alt="Saab service Rhenen logo" class="logo">
                <p>Saab service Rhenen staat altijd voor u klaar. Onze deuren staan altijd voor u open!</p>
            </div>

            <hr class="clearfix w-100 d-md-none pb-3">

            <div class="col-md-3 col-12">
                <h5 class="text-uppercase">links</h5>
                <hr class="border-bottom-footer-titles">
                <ul class="list-unstyled list1">
                    <?php foreach ($allPagesArray as $page) { ?>
                        <li class="d-flex flex-row">
                            <a class="link" href="<?= $page['document'] ?>.php"><?= $page['tekst'] ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="col-md-4 col-12">
                <h5 class="text-uppercase">contact</h5>
                <hr class="border-bottom-footer-titles">
                <ul class="list-unstyled list2">
                    <?php foreach ($footerSecondRowInfo as $row) {
                        echo '<li class="d-flex flex-row">' . $row['image'] . $row['text'] . '</li>';
                    } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="index.php" class="copyright-link">SaabServiceRhenen.nl</a>
    </div>
</footer>
</body>
</html>
