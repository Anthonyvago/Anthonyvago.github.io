<?php

if (count($_GET) == 0) { /* Als er niks is meegegeven: */
    require_once 'includes/functions.php';
    $title = getPages()['occasionsPagina']['tekst'];
    require_once 'includes/carInformation.php';
    require_once 'includes/header.php';
    require_once 'classes/views/occasionsView.php';
}

if (count($_GET) > 0) { /* Als er iets is meegegeven: */
    if (isset($_GET['id'])) { /* Als ID is gegeven: */
        require_once 'includes/carInformation.php';
        $minID = 0;
        $maxID = count($allCarsInfo) - 1;

        if ($_GET['id'] >= $minID && $_GET['id'] <= $maxID) { /* Als het gegeven ID overeen komt: */
            $title = $allCarsInfo[$_GET['id']]['Gegevens']['Merk'] . " " . $allCarsInfo[$_GET['id']]['Gegevens']['Model'];
            require_once 'includes/functions.php';
            require_once 'includes/header.php';
            require_once 'classes/views/occasion.php';
        } else { /* Als het gegeven ID niet overeen komt: */
            unset($cars);
            $messageTitle = 'Oops, dit ID bestaat niet.';
            $message = 'De pagina die u probeert op te vragen bestaat niet. Dit komt doordat dit ID niet bekend is bij ons.';
            $title = 'Oops; ID bestaat niet';
            require_once 'includes/functions.php';
            require_once 'includes/header.php';
            require_once 'classes/views/errorPageView.php';
        }
    } else { /* Als iets anders dan ID is gegeven: */
        $messageTitle = 'Oops, ongeldige invoer.';
        $message = 'De pagina die u probeert op te vragen bestaat niet. Dit komt door een ongeldige invoer.';
        $title = 'Oops; Ongeldige invoer';
        require_once 'includes/functions.php';
        require_once 'includes/header.php';
        require_once 'classes/views/errorPageView.php';
    }
}
require_once 'includes/footer.php';