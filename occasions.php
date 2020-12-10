<?php

if (count($_GET) == 0) { /* Als er niks is meegegeven: */
    require_once 'includes/functions.php';
    $title = getPages()['occasionsPagina']['tekst'];
    $pageActive = 'occasions';
    require_once 'includes/carInformation.php';
    require_once 'includes/header.php';
    require_once 'classes/views/occasionsView.php';
}

if (count($_GET) > 0) { /* Als er iets is meegegeven: */
    if (isset($_GET['id'])) { /* Als ID is gegeven: */
        require_once 'includes/carInformation.php';
        $cars = getCarInfo();
        $minID = 0;
        $maxID = count($cars);

        if ($_GET['id'] >= $minID && $_GET['id'] < $maxID) { /* Als het gegeven ID overeen komt: */
            $title = $cars[$_GET['id']]['Gegevens']['Merk'] . " " . $cars[$_GET['id']]['Gegevens']['Model'];
            $pageActive = "occasions";
            require_once 'includes/functions.php';
            require_once 'includes/header.php';
            require_once 'classes/views/occasion.php';
        } else { /* Als het gegeven ID niet overeen komt: */
            unset($cars);
            $messageTitle = 'Oops, dit ID bestaat niet.';
            $message = 'De pagina die u probeert op te vragen bestaat niet. Dit komt doordat dit ID niet bekend is bij ons.';
            $title = 'Oops; ID bestaat niet';
            $pageActive = 'none';
            require_once 'includes/functions.php';
            require_once 'includes/header.php';
            require_once 'classes/views/errorPageView.php';
        }
    } else { /* Als iets anders dan ID is gegeven: */
        $messageTitle = 'Oops, ongeldige invoer.';
        $message = 'De pagina die u probeert op te vragen bestaat niet. Dit komt door een ongeldige invoer.';
        $title = 'Oops; Ongeldige invoer';
        $pageActive = 'none';
        require_once 'includes/functions.php';
        require_once 'includes/header.php';
        require_once 'classes/views/errorPageView.php';
    }
}
require_once 'includes/footer.php';