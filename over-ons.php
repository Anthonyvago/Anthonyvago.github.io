<?php
require_once 'includes/functions.php';
$title = getPages()['overOnsPagina']['tekst'];
$pageActive = "over-ons";
require_once 'includes/header.php';
require_once 'classes/views/overOnsView.php';
require_once 'includes/footer.php';