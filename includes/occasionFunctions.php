<?php
$car = getCarInfo()[$carID];

// ZELF INSTELLEN
$maxFileNr = 100;   /* Maximale bestandsnaam; Er wordt niet gekeken of er een afbeelding bestaat met een hoger cijfer als bestandsnaam dan dit. */
$maxPhotoCount = 100;    /* Maximaal aantal foto's */
$fileFormat = 'png';

function initCarPhotos($maxFileNr, $maxPhotoCount, $carID, $fileFormat)
{
    $photoNrs = [];
    $arrayPos = 0;
    $carID++;
    for ($i = 0; $i < $maxFileNr+1 && count($photoNrs) < $maxPhotoCount; $i++) {
        if (file_exists('images/Occasions/aangeboden occasions/' . $carID . '/' . $i . '.' . $fileFormat)) {
            $photoNrs[$arrayPos] = $i;
            $arrayPos++;
        }
    }
    return $photoNrs;
}