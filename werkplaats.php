<?php
require_once 'includes/functions.php';
$title = getPages()['werkplaatsPagina']['tekst'];
$pageActive = 'werkplaats';
require_once 'includes/header.php';
require_once 'classes/views/werkplaatsView.php';
require_once 'includes/footer.php';