<?php

$shortIntroductions = array(
    array('Over ons', 'De eigenaar van Saab Service Rhenen is Albert Vágo.', 'over-ons'),
    array('Werkplaats', 'In de werkplaats verrichten wij allerlei werkzaamheden. Om deze te bekijken klikt u hieronder.', 'werkplaats'),
    array('Occasions', 'Bent u geïnteresseerd in een Saab? Dan bent u op het juiste adres', 'occasions')
);

function calcAvarageRating($googleReviews)
{
    $countRating = 0;
    $countReviews = count($googleReviews);
    foreach ($googleReviews as $googleReview) {
        $countRating += $googleReview['stars'];
    }
    return $countRating / $countReviews;
}

function getTimeDiffToString($date1)
{
    $date2 = date('Y/m/d'); //Pakt de datum van vandaag
    $timeDifference = abs(strtotime($date2) - strtotime($date1)); /* Aantal sec verschil tussen vandaag en wnnr review is geplaatst */
//  Berekent aantal jaren, maanden en dagen verschil uit:
    $years = floor($timeDifference / (365 * 60 * 60 * 24));
    $months = floor(($timeDifference - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
    $days = floor(($timeDifference - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
//  Afronden op maanden:
    $date1 = strtotime($date1);
    if ($days > cal_days_in_month(CAL_GREGORIAN, date("m", $date1), date("Y", $date1))) { /* Afronden op maanden; Als het meer dan een halve maand scheelt, gaat het aantal van maanden omhoog */
        $months++;
        if ($months > 12) { /* Als $months hoger is dan 12, reset ie naar 0 (= januari) en komt er een jaar bij */
            $months = 0;
            $years++;
        }
    }
    //  Genereert de string die de gebruiker moet zien
    $timeDiffString = '';
    if ($years > 0) {
        if ($months == 0) $timeDiffString = 'Ongeveer ' . $years . ' jaar geleden';
        if ($months == 1) $timeDiffString = 'Ongeveer ' . $years . ' en ' . $months . ' maand geleden';
        if ($months > 1) $timeDiffString = 'Ongeveer ' . $years . ' jaar en ' . $months . ' maanden geleden';
    } else {
        if ($months == 0) {
            if ($days == 0) $timeDiffString = 'Vandaag';
            if ($days == 1) $timeDiffString = 'Gisteren';
            if ($days > 1) $timeDiffString = $days . ' dagen geleden';
        }
        if ($months == 1) $timeDiffString = $months . ' maand geleden';
        if ($months > 1) $timeDiffString = 'Ongeveer ' . $months . ' maanden geleden';
    }
    return $timeDiffString;
}

function getDateToText($reviewDate)
{
    $reviewDate = strtotime($reviewDate);
    $reviewDay = date("d", $reviewDate);
    $reviewMonth = date("m", $reviewDate);
    $reviewYear = date("Y", $reviewDate);

    $allMonthsArr = ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'];
    for ($monthNr = 0; $monthNr < count($allMonthsArr); $monthNr++) {
        if ($monthNr + 1 == $reviewMonth) {
            $reviewMonth = $allMonthsArr[$monthNr];
        }
    }

    $reviewDay = $reviewDay * 10 / 10; // Als deze line er niet was, dan zou er komen te staan: "04 juni 2020". Van die "04" willen wij natuurlijk "4" maken.

    return '(' . $reviewDay . ' ' . $reviewMonth . ' ' . $reviewYear . ')';
}